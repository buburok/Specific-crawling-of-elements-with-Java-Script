<!DOCTYPE html>
<html>
<head>
<script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
<style>

.tre{
display:none;
}
.gerda{
  width:30px;
  background-color:red;
  margin:10px;
  color:#fff;
  padding:10px;
}
</style>
</head>
<body>


<div class="gerda">1<div id="hhh"><a href="https://websitepr.eu/" target="_blank">click</a></div></div>
<div class="gerda">2<div id="hhh"><a href="https://websitepr.eu/" target="_blank">click</a></div></div>
<div class="gerda">3<div id="hhh"><a href="https://websitepr.eu/" target="_blank">click</a></div></div>
<div class="gerda">4<div id="hhh"><a href="https://websitepr.eu/" target="_blank">click</a></div></div>

</body>
<script>
jQuery(".gerda").each(function(a){
jQuery(this).click(function(a){
jQuery(this).toggleClass('tre')
jQuery('#hhh a').click(function(a){
  a.stopPropagation();
  console.log(this)})
if (jQuery('.gerda:nth-child(4)').hasClass('tre')){
jQuery('.gerda').removeClass('tre');
//console.log('yes')
}
})
})
</script>
</html>