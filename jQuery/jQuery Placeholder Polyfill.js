/*
The HTML5 Placeholder property is a totally awesome way to label forms, but as a new feature,
support for it varies. It’s occasionally difficult to style placeholder text as well.
This jQuery function imitates the behavior you’d expect, using the value property of the input tag:
/*

jQuery(document).ready(function() {
  jQuery.fn.cleardefault = function() {
    return this.focus(function() {
    if( this.value == this.defaultValue ) {this.value = “”;}
  }).blur(function() {
    if( !this.value.length ) {this.value = this.defaultValue;}
  });
};
jQuery(“input, textarea”).cleardefault();
});
