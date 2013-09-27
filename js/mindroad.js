var diameter = "1200",
    i = 0,
    root,
	node,
	nodes;

var tree = d3.layout.tree()
.size([360, diameter/2]);

var diagonal = d3.svg.diagonal()
.projection(function (d) {
	var r = d.y, a = (d.x - 90) / 180 * Math.PI;
	return [r * Math.cos(a), r * Math.sin(a)];
});

var drag = d3.behavior.drag()
.origin(function() { 
    var t = d3.select(this);
    return {x: diameter/4 + t.attr("x0"), y: diameter/4 + t.attr("y0")};
})
.on("drag", function () {
	d3.select(this).attr("transform", "translate("+d3.event.x+","+d3.event.y+")");
});
	
var vis = d3.select("#content").append("svg")
.attr("width", diameter)
.attr("height", diameter)
.append("g")
.attr("transform", "translate(" + diameter/4 + "," + diameter/4 + ")")
.call(drag)

d3.json("mindroad.json", function(json) {
	root = json;
	//root.x0 = diameter / 2;
	//root.y0 = diameter / 2;

	function toggleAll(d) {
		if (d.children) {
			d.children.forEach(toggleAll);
			toggle(d);
		}
	}

	// Initialize the display to show a few nodes.
	root.children.forEach(toggleAll);
	toggle(root);
	update(root);
});

function update(source) {
	var duration = d3.event && d3.event.altKey ? 5000 : 500;

	// Compute the new tree layout.
	nodes = tree.nodes(root).reverse();

	// Normalize for fixed-depth.
	nodes.forEach(function(d) { d.y = d.depth * 180; });

	// Update the nodes…
	node = vis.selectAll("g.node")
	.data(nodes, function(d) { return d.id || (d.id = ++i); });

	// Enter any new nodes at the parent's previous position.
	var nodeEnter = node.enter().append("g")
	.attr("class", "node")
	.attr("transform", function(d) { return "rotate(" + (source.x0 - 90) + ")translate(" + source.y0 + ")rotate(" + (90 - source.x0) + ")"; })
	.on("click", function(d) { toggle(d); update(d); send(d);});

	nodeEnter.append("circle")
	.attr("r", 1e-6)
	.style("fill", function(d) { return d._children ? "lightsteelblue" : "#fff"; });

	nodeEnter.append("text")
	.attr("x", 0)
	.attr("dy", ".35em")
	.attr("text-anchor", "middle")
	.text(function(d) { return d.name; })
	.style("fill-opacity", 1e-6);

	// Transition nodes to their new position.
	var nodeUpdate = node.transition()
	.duration(duration)
	.attr("transform", function(d) {
		if(d.depth!=0){
			return "rotate(" + (d.x - 90) + ")translate(" + (d.y) + ")rotate(" + (90 - d.x) + ")"; 
		}
	});
		
	nodeUpdate.select("circle")
	.attr("r", 40)
	.style("fill", function(d) { return d._children ? "lightsteelblue" : "#fff"; });

	nodeUpdate.select("text")
	.style("fill-opacity", 1);

	// Transition exiting nodes to the parent's new position.
	var nodeExit = node.exit().transition()
	.duration(duration)
	.attr("transform", function(d) { return "rotate(" + (source.x - 90) + ")translate(" + source.y + ")rotate(" + (90 - source.x) + ")"; })
	.remove();

	nodeExit.select("circle")
	.attr("r", 1e-6);

	nodeExit.select("text")
	.style("fill-opacity", 1e-6);

	// Update the links…
	var link = vis.selectAll("path.link")
	.data(tree.links(nodes), function(d) { return d.target.id; });

	// Enter any new links at the parent's previous position.
	link.enter().insert("path", "g")
	.attr("class", "link")
	.attr("d", function(d) {
		var o = {x: source.x0, y: source.y0};
		return diagonal({source: o, target: o});
	});

	// Transition links to their new position.
	link.transition()
	.duration(duration)
	.attr("d", diagonal);

	// Transition exiting nodes to the parent's new position.
	link.exit().transition()
	.duration(duration)
	.attr("d", function(d) {
		var o = {x: source.x, y: source.y};
		return diagonal({source: o, target: o});
	})
	.remove();
	
	/*if(source.children) {
		trans(source);
	}
	else {
		if(source.depth!=0){
			trans(source.parent);
		}
	}*/
	
	// Stash the old positions for transition.
	nodes.forEach(function(d) {
		d.x0 = d.x;
		d.y0 = d.y;
	});
}

// Toggle children.
function toggle(d) {
	if (d.children) {
		d._children = d.children;
		d.children = null;
	} else {
		d.children = d._children;
		d._children = null;
	}
}

function trans(d) {
	var degree = (d.x-90)/180;
	var x = d.y * Math.cos(degree);
	var y = d.y * Math.sin(degree);
	vis.transition()
	.duration(500)
	.attr("transform", "translate(" + (diameter/2-x) + "," + (diameter/2-y) + ")");
}

function hide(d) {
	
}

var xian = function (d, i) {
	var source = d3_source, target = d3_target, projection = d3_svg_diagonalProjection;
    function diagonal(d, i) {
		var p0 = source.call(this, d, i), p3 = target.call(this, d, i), m = (p0.y + p3.y) / 2, p = [ p0, {
			x: p0.x,
			y: m
		}, {
			x: p3.x,
			y: m
		}, p3 ];
		p = p.map(projection);
		return "M" + p[0] + "C" + p[1] + " " + p[2] + " " + p[3];
    }
    diagonal.source = function(x) {
		if (!arguments.length) return source;
		source = d3_functor(x);
		return diagonal;
    };
    diagonal.target = function(x) {
		if (!arguments.length) return target;
		target = d3_functor(x);
		return diagonal;
    };
    diagonal.projection = function(x) {
		if (!arguments.length) return projection;
		projection = x;
		return diagonal;
    };
    return diagonal;
}
function d3_svg_diagonalProjection(d) {
    return [ d.x, d.y ];
}