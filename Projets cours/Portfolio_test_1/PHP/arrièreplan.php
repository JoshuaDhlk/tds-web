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

?>

<?php
$focusOnElement = new Func("focusOnElement", function($element_id = null) use (&$«24») {
  call_method(call($«24», _concat("#div_", $element_id)), "goTo");
});

?>
<div id="div_element1">
   yadda yadda 
</div>
<div id="div_element2">
   blah blah
</div>

<span onclick="focusOnElement('element1');">Click here to go to element 1</span>
<span onclick="focusOnElement('element2');">Click here to go to element 2</span>
