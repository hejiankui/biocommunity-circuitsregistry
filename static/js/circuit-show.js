
/**
 * Circuit+ circuit.show
 * author: Zhuoteng Peng
 */

$(document).ready(function () {
  $('.ui.rating').rating().rating('disable');

  var partsform = $('#parts-form');
  var partslines = partsform.find('table tbody tr');
  var totalcount = partslines.length;
  var reqcount = 0;
  if (totalcount <= 0) {
    $('#parts-form').removeClass('loading');
  }
  partslines.each(function () {
    var tds = $(this).find('td');
    if (tds.length == 3) {
      var id = $.trim($(tds[0]).text());
      $.ajax({
        url: '/term/part/get/' + id,
        dataType: 'xml',
        success: function (data) {
          var partInfo = $(data);
          var partUrl = partInfo.find("part > part_url");
          var partType = partInfo.find("part > part_type");
          var partDesc = partInfo.find("part > part_short_desc");
          if (partUrl) {
            $(tds[0]).find('a').attr('href', partUrl.text());
          }
          if (partType) {
            $(tds[1]).text(partType.text());
          }
          if (partDesc) {
            $(tds[2]).text(partDesc.text());
          }
        },
        complete: function () {
          reqcount++;
          if (reqcount >= totalcount) {
            $('#parts-form').removeClass('loading');
          }
        }
      })
    }
  });
});