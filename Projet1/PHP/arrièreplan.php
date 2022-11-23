<?php
$scrollFunction = new Func("scrollFunction", function() use (&$document) {
  if (get(get($document, "body"), "scrollTop") > 80.0 || get(get($document, "documentElement"), "scrollTop") > 80.0) {
    set(get(call_method($document, "getElementById", "navbar"), "style"), "padding", "30px 10px");
    set(get(call_method($document, "getElementById", "logo"), "style"), "fontSize", "25px");
  } else {
    set(get(call_method($document, "getElementById", "navbar"), "style"), "padding", "80px 0px");
    set(get(call_method($document, "getElementById", "logo"), "style"), "fontSize", "35px");
  }

});
set($window, "onscroll", new Func(function() use (&$scrollFunction) {
  call($scrollFunction);
}));
