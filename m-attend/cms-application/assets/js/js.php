

<script src="https://use.fontawesome.com/a2294ae672.js"></script>

<script src="assets/js/jQuery/jquery-3.1.1.min.js"></script>
<script src="assets/js/jquery-ui-1.12.1.custom/jquery-ui.js"></script>

<script src="assets/js/canvasjs.min.js"></script>
<script src="assets/js/jquery.canvasjs.min.js"></script>

<script src="assets/css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src='assets/js/tinymce/js/tinymce/tinymce.min.js'></script>
<script src="https://d3js.org/d3.v4.min.js"></script>
<script src="assets/js/require.js"></script>


<script>
  tinymce.init({
  selector: '#post',

  height: 500,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
  ],
  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
  });
////////////////////////////////////////
///     vander campagins charts
///////////////////////////////////////
/*=========daily impressins=======*/
window.onload = function ()
{
   var chart = new CanvasJS.Chart("chartContainer",
   {
     title:{
       text: "Monthly campaigns views"
     },
     animationEnabled: true,
     axisY :{
       includeZero: false
     },
     toolTip: {
       shared: "true"
     },
     data: [
     {
       type: "spline",
       showInLegend: true,
       name: "mentions of iPhone",
       markerSize: 0,
       dataPoints: [
       {x: new Date(2013,4,1 ), y: 430576},
       {x: new Date(2013,4,2 ), y: 498157},
       {x: new Date(2013,4,3 ), y: 415128},
       {x: new Date(2013,4,4 ), y: 342031},
       {x: new Date(2013,4,5 ), y: 320376},
       {x: new Date(2013,4,6 ), y: 405322},
       {x: new Date(2013,4,7 ), y: 433426},
       {x: new Date(2013,4,8 ), y: 430876},
       {x: new Date(2013,4,09 ), y: 372277},
       {x: new Date(2013,4,10 ), y: 351863},
       {x: new Date(2013,4,11 ), y: 281959},
       {x: new Date(2013,4,12 ), y: 282666},
       {x: new Date(2013,4,13 ), y: 353718},
       {x: new Date(2013,4,14 ), y: 507833}
       ]
     }
     ]
   });
   chart.render()
///////////////////////////////
var chart = new CanvasJS.Chart("topRented",
{
  title:{
    text: "Top rented products",
    fontFamily: "Impact",
    fontWeight: "normal"
  },

  legend:{
    verticalAlign: "bottom",
    horizontalAlign: "center"
  },
  data: [
  {
    //startAngle: 45,
    indexLabelFontSize: 20,
    indexLabelFontFamily: "Garamond",
    indexLabelFontColor: "darkgrey",
    indexLabelLineColor: "darkgrey",
    indexLabelPlacement: "outside",
    type: "doughnut",
    showInLegend: true,
    dataPoints: [
      {  y: 53.37, legendText:"Android 53%", indexLabel: "Android 53%" },
      {  y: 35.0, legendText:"iOS 35%", indexLabel: "Apple iOS 35%" },
      {  y: 7, legendText:"Blackberry 7%", indexLabel: "Blackberry 7%" },
      {  y: 2, legendText:"Windows 2%", indexLabel: "Windows Phone 2%" },
      {  y: 5, legendText:"Others 5%", indexLabel: "Others 5%" }
    ]
  }
  ]
});

chart.render();

//chart.render();
}
/*=========top seller=======*/


////////////////////////////////////////
///
////////////////////////////////////////
$(document).ready(function(){


	$(".btn-delete").on("click",function(){

		var selected = $(this).attr("id");
		//alert("Are you sure you want to delete! "+selected);
		$.get("widgets/del-page.php?q="+selected);

		var confirmed = confirm("Are you sure you want to delete !");
		if(confirmed == true)
		{   console.log(selected+"deleted");
			$("#page_"+selected).remove();
		}
	});

	// layout pop up
	var id = 1;
	var toggle = 0;
	while(id<9)
	{
		$("#flow_"+id).hide(0);

		id +=1;
	}
	$(".push-up").hide(0);
	$(".push-down").on("click",function(){
		var selected = $(this).attr("id");

			$("#flow_"+selected).show(380);
			$(".push-down").hide(0);
			$(".push-up").show(40);

	});

	$(".push-up").on("click",function(){
		var selected = $(this).attr("id");

			$("#flow_"+selected).hide(380);
			$(".push-up").hide(0);
			$(".push-down").show(40);
	});

	/*$(".up").dblclick(function(){
		var selected = $(this).attr("id");

			$("#flow_"+selected).hide(380);
	});*/
  /////////////////////////////
  ///     start clint
  /////////////////////////////
  $("#clint").on("click",function(){

    var oldWin = window.open("http://localhost/websites/metabots/user_panel/clint/clint.php","myWindow",
            "height=650,width=450,menubar=no,status=no");
			//loadUrls(0,oldWin);
  });
  /**
    * put the clint on work
    */
  $("#start-clint").on("click",function(){

      // change to close will close itself
      var oldWin = window.open("http://takenkart.com", "myWindow","_blank"); // will open new tab
      loadUrls(0,oldWin);
  });
  function loadUrls(counter,oldWin){
	  var urls =["http://google.com","http://takenkart.com","http://jyolab.com","http://facebook.com"];
	  var stop = false;
		console.log(oldWin);
		  setTimeout(function(){

		  oldWin.location.replace(urls[counter],"myWindow","height=300,width=300,menubar=no,status=no");
		  if(counter<3 && stop == false)
			loadUrls(counter+1,oldWin);
		  else {if(counter>3 && stop == false)
				loadUrls(0,oldWin);}
		  if(!oldWin)
		  {stop = true;}
		  },6000);
		  console.log('ok');
		  console.log(oldWin);


  }
  function startNewWindow(){
	var oldWin = window.open("http://github.com","myWindow",
            "height=300,width=300,menubar=no,status=no");
			loadUrls(0,oldWin);
	}


  /////////////////////////////
  ///     date controlls
  /////////////////////////////
  $("#datepicker1").datepicker();
  $("#datepicker2").datepicker();
  /////////////////////////////
  ///      campagins
  /////////////////////////////
  $('#myTabs a[href="#campagins"]').tab('hide') // Select tab by name
  $('#myTabs a[href="#draft"]').tab('hide') // Select tab by name
  $('#myTabs a[href="#rejected"]').tab('hide') // Select tab by name
  $('#mytabs a').click(function (e) {
     e.preventDefault()

     $('#mytabs a[href="#published"]').tab('show') // Select tab by name
     $('#myTabs a[href="#campagins"]').tab('hide') // Select tab by name
     $('#myTabs a[href="#draft"]').tab('hide') // Select tab by name
     $('#myTabs a[href="#rejected"]').tab('hide') // Select tab by name

  });
  ////////////////////////////////
  ///
  ////////////////////////////////
});

function delPage(str)
 {
   if(str != '')

     if(window.XMLHttpRequest)
        xmlhttp = new XMLHttpRequest();
     else
        xmlhttp = new ActiveXObject("microsoft.XMLHTTP");
        alert(str);
        xmlhttp.onreadystatechange = function()
        {
          if(this.readyState == 4 && this.status == 200)
			  document.getElementById(str).innerHTML = this.responseText;

        }

	xmlhttp.open("GET","widgets/del-page.php?q="+str,true);
    xmlhttp.send();

 }
</script>
