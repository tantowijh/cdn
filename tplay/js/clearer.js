// select all of the links with the class "link"
var links = $('a[class="is-dark"]');

// replace the link with a hash:
links.attr('href',"#");

// replace the text:
links.html("Thowie!");
