$(document).ready(function() {
  $(".child1").hide();
  $(".container").click(function() {
    $(".child1").toggle();
  });
})
function myFunction(x)
{
    x.classList.toggle("change");
}
