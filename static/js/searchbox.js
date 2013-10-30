// for index
// ++++++++++++++++++++++++++++++++++++++++++

function searchby(method) {
  var q = $('#searchbox').val();
  window.location.href = '/circuit/search?method=' + method + '&q=' + encodeURIComponent(q);
}

$(document).ready(function () {

  var searchMethod = ['name', 'description', 'tag'];

  var sd = $('#searchfield .dropdown');
  var sdmenu = sd.find('.menu');
  var sditem = sdmenu.find('.item');
  var sditemActiveIndex = 0, sditemLastActiveIndex = 0;
  var sditemCount = sditem.length;

  function searchbox_play() {
    var q = $(this).val();
    sdmenu.find('.searchtext').text(q);
    if (q !== '') {
      sd.dropdown('show');
    } else {
      sd.dropdown('hide');
    }
  }

  function searchbox_keyup(event) {
    var activeKey = false;
    switch (event.which) {
    case 13:
      event.preventDefault();
      sditem.eq(sditemLastActiveIndex).click();
      break;
    case 38: //Up
      sditemActiveIndex--;
      if (sditemActiveIndex < 0) {
        sditemActiveIndex = sditemCount - 1;
      }
      activeKey = true;
      break;
    case 40: //Down
      sditemActiveIndex++;
      if (sditemActiveIndex > sditemCount - 1) {
        sditemActiveIndex = 0;
      }
      activeKey = true;
      break;
    }
    if (activeKey) {
      event.preventDefault();
      sditem.eq(sditemLastActiveIndex).removeClass('active');
      sditem.eq(sditemActiveIndex).addClass('active');

      sditemLastActiveIndex = sditemActiveIndex;
    }
  }

  function searchbox_init() {
    sd.dropdown();

    if (window.search_method) {
      sditemLastActiveIndex = $.inArray(search_method, searchMethod);
      if (sditemLastActiveIndex == -1) {
        sditemLastActiveIndex = 0;
      } else {
        sditemActiveIndex = sditemLastActiveIndex;
      }
    }

    sditem.eq(sditemActiveIndex).addClass('active');

    $('#searchbox')
      .keydown(searchbox_play)
      .change(searchbox_play)
      .keyup(searchbox_keyup)
      .keyup(searchbox_play)
      .focus(searchbox_play)
      /*.blur(function () {
        setTimeout(function () {
          sd.dropdown('hide');
        }, 800);
      })*/
      //.keypress(searchbox_keypress)
      ;
  }

  searchbox_init();
});