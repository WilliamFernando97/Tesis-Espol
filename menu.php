<!DOCTYPE html>
<html lang="en">

<title>Índices Demográficos - ESPOL</title>
<link rel="icon" type="image/x-icon" href="img/ploticon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<link rel="stylesheet" href="multiple-select.css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-indigo.css">

<!-- Required jsquery -->
    

<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!----css3---->
    <link rel="stylesheet" href="css/custom.css">
<!----Highchart---->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/themes/high-contrast-light.js"></script>
<!----D3.js---->
    <script src="//d3js.org/d3.v3.min.js"></script>
<!--google fonts -->
	  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

<!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

<!--idk-->
    <!--script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="multiple-select.js"></script>

<style>
.w3-theme {color:#fff !important;background-color:#34495E !important}
.w3-btn {background-color:#34495E;margin-bottom:4px}
.w3-code{border-left:4px solid #34495E}
.myMenu {margin-bottom:150px}

.button {
  border: none;
  border-radius:10px;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  width: 230px;
  font-size: 16px;
  
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}


.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #34495E;
  
}

.button1:hover {
  background-color: #34495E;
  color: white;
}

.button1:focus {
    background-color: #34495E;
    color: white;
}

.button1:active{
cursor: pointer;
background-color: #34495E;
}

.button1.clicked{
background-color: #34495E;
}

.button1.span{
padding: 15px;
background-color: #34495E;
display: flex;
align-content: center;
justify-content: center;
}


.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #34495E;
}

.button2:hover {
  background-color: #34495E;
  color: white;
}

.filterDiv {
  float: left;
  background-color: #fff;
  color: black;
  text-align: center;
  margin: 2px;
  display: none;
}

.show {
  display: inline;
}

.container {
  margin-top: 20px;
  overflow: hidden;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>

<!-- Estilo tabla -->
<style>
* {
  box-sizing: border-box;
}

#myTable {
  border-collapse: collapse;
  width: 30%;
  border: 1px solid #ddd;
  font-size: 14px;
}

#myTable th, #myTable td {
  text-align: center;
  padding: 12px;
  
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>


<script>
Highcharts.setOptions({
    colors: ["#ffcf41","#4171ff","#022c5c","#02595c","#0094b6","#b62200","#e44813","#e41346","#ba1615","#ba1567","#ff7041"]
});
</script>



<!-- Top -->
<div class="w3-top">
  <div class="w3-row w3-white w3-padding">
    <div class="w3-half" style="margin:4px 0 6px 0"></div>
    <div class="w3-half w3-margin-top w3-wide w3-hide-medium"><div class="w3-right"><h5>Construcción de Índices Demográficos - ESPOL</h5></div></div>
  </div>
  <div class="w3-bar w3-theme w3-large" style="z-index:4;">
    <a class="w3-bar-item w3-button w3-left w3-hide-large w3-hover-white w3-large w3-theme w3-padding-16" onclick="w3_open()">&#9776;</a>
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-small w3-hover-white w3-padding-16" onclick="w3_show_nav('menuTut')"><i class="fas fa-bars"></i> Menú</a>
  </div>
</div>

<!-- Sidebar -->

<nav id="sidebar">
<div class="sidebar-header">
                <h2><img src="img/logoespol.png" class="img-fluid" class="center"/></h2>

</div>

<ul class="list-unstyled components">

  <li class="active">
  <button  class="button button1 tablink" type="button" onclick="openCity(event, 'pptx')">Introducción</button>
  <ul class="collapse list-unstyled menu"></ul>
  </li>
 
  <li class="active">
  <button class="button button1 tablink" type="button" onclick="openCity(event, 'ma')">Resultados Principales</button>
  <ul class="collapse list-unstyled menu"></ul>
  </li>

  <li class="active">
  <button class="button button1 tablink" type="button" onclick="openCity(event, 'pe')">Índices Demográficos</button>
  <ul class="collapse list-unstyled menu"></ul>
  </li>

  <li class="active">
  <button class="button button1 tablink" type="button" onclick="openCity(event, 'mab')">Autores</button>
  <ul class="collapse list-unstyled menu"></ul>
  </li>





</ul>

</nav>

<!-- Overlay effect when opening sidebar on small screens -->

<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 270 pixels when the sidebar is visible -->

<div class="w3-main w3-container"  style="margin-left:270px;margin-top:117px;">

  <div class="w3-padding"></div>


  <div id ="pptx"class="w3-container city" style="display:flex"> 

  <div class="row">
			     <div class="col-lg-8 col-md-12">
				   <div class="card" style="min-height:485px">
					   <div class="card-content table-responsive">
             <iframe src="files/pres4.pdf" height="500px" width="868px" ></iframe>
					   </div>
				   </div>

		     
		   </div>

       <div class="col-lg-4 col-md-12">
				   <div class="card" style="min-height:485px">

					   <div class="card-content table-responsive">


             <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
								<img src="img/ods/ods3.jpg" class="d-block w-100" alt="..." height="500px" width="500px">
								</div>
								<div class="carousel-item">
								<img src="img/ods/ods10.jpg" class="d-block w-100" alt="..." height="500px" width="500px">
								</div>
								<div class="carousel-item">
								<img src="img/ods/ods11.jpg" class="d-block w-100" alt="..." height="500px" width="500px">
								</div>
								<div class="carousel-item">
								<img src="img/ods/ods16.jpg" class="d-block w-100" alt="..." height="500px"  width="500px">
								</div>
							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
							</div>


					   </div>

				   </div>

		     
		   </div>

	</div>
   

    <div class="w3-container">



    </div>
    </div>





<div id="ma" class="w3-container city" style="display:none">
    <h2><b> Análisis Descriptivo</b></h2>
    <h3>Mapa Geográfico del Ecuador del número de muertes por provincia.</h3>
    <div class="row">
			     <div class="col-lg-4 col-md-12">
				   <div class="card" style="min-height:485px">
				       <div class="card-header card-header-text">
					      <h4 class="card-title">Número de Fallecidos en 2018 </h4>
						  <p class="category">Fuente: Registro Estadístico de Defunciones Generales. INEC (2018)</p>
					   </div>
					   <div class="card-content table-responsive">
             <iframe src="img/Mapas_EDG_Highcharts/EDG2018N.html" height="600px" width="100%" ></iframe>
					   </div>
				   </div>

		     
		   </div>
		   
		   <div class="col-lg-4 col-md-12">
		      <div class="card" style="min-height:485">
          <div class="card-header card-header-text">
					      <h4 class="card-title">Número de Fallecidos en 2019</h4>
						  <p class="category">Fuente: Registro Estadístico de Defunciones Generales. INEC (2019)</p>
					   </div>
					   <div class="card-content table-responsive">
             <iframe src="img/Mapas_EDG_Highcharts/EDG2019N.html" height="600px" width="100%" ></iframe>
					   </div>			 

		   </div> 

		     </div>

		   <div class="col-lg-4 col-md-12">
		      <div class="card" style="min-height:485">
          <div class="card-header card-header-text">
					      <h4 class="card-title">Número de Fallecidos en 2020</h4>
						  <p class="category">Fuente: Registro Estadístico de Defunciones Generales. INEC (2020)</p>
					   </div>
					   <div class="card-content table-responsive">
             <iframe src="img/Mapas_EDG_Highcharts/EDG2020N.html" height="600px" width="100%" ></iframe>
					   </div>				 

		   </div> 

		     </div>
			  </div>


        <h3>Top 20 Causas de Muertes Más Frecuentes en Ecuador por Año.</h3>
    <div class="row">
			     <div class="col-lg-12 col-md-12">
				   <div class="card" style="min-height:485px">
				       <div class="card-header card-header-text">
					      <h4 class="card-title">Causas de Muerte en 2018 </h4>
						  <p class="category">Fuente: Fuente: Registro Estadístico de Defunciones Generales. INEC (2018)</p>
					   </div>
					   <div class="card-content table-responsive">
             <iframe src="img/Mapas_EDG_Highcharts/C2018.html" height="500px" width="100%" ></iframe>
					   </div>
				   </div>

		     
		   </div>

			  </div>
    <div class="row">
			     <div class="col-lg-12 col-md-12">
				   <div class="card" style="min-height:485px">
				       <div class="card-header card-header-text">
					      <h4 class="card-title">Causas de Muerte en 2019 </h4>
						  <p class="category">Fuente: Fuente: Registro Estadístico de Defunciones Generales. INEC (2019)</p>
					   </div>
					   <div class="card-content table-responsive">
             <iframe src="img/Mapas_EDG_Highcharts/C2019.html" height="500px" width="100%" ></iframe>
					   </div>
				   </div>

		     
		   </div>

			</div>  
    
    <div class="row">
			     <div class="col-lg-12 col-md-12">
				   <div class="card" style="min-height:485px">
				       <div class="card-header card-header-text">
					      <h4 class="card-title">Causas de Muerte en 2020 </h4>
						  <p class="category">Fuente: Fuente: Registro Estadístico de Defunciones Generales. INEC (2020)</p>
					   </div>
					   <div class="card-content table-responsive">
             <iframe src="img/Mapas_EDG_Highcharts/C2020.html" height="500px" width="100%" ></iframe>
					   </div>
				   </div>

		     
		   </div>

		</div>

    <h3>Fallecimientos por Área de Residencia.</h3>
    <div class="row">
			     <div class="col-lg-4 col-md-12">
				   <div class="card" style="min-height:485px">
				       <div class="card-header card-header-text">
					      <h4 class="card-title">Número de Fallecidos en 2018 </h4>
						  <p class="category">Fuente: Registro Estadístico de Defunciones Generales. INEC (2018)</p>
					   </div>
					   <div class="card-content table-responsive">
             <iframe src="img/Mapas_EDG_Highcharts/Area2018.html" height="500px" width="100%" ></iframe>
					   </div>
				   </div>

		     
		   </div>
		   
		   <div class="col-lg-4 col-md-12">
		      <div class="card" style="min-height:485">
          <div class="card-header card-header-text">
					      <h4 class="card-title">Número de Fallecidos en 2019</h4>
						  <p class="category">Fuente: Registro Estadístico de Defunciones Generales. INEC (2019)</p>
					   </div>
					   <div class="card-content table-responsive">
             <iframe src="img/Mapas_EDG_Highcharts/Area2019.html" height="500px" width="100%" ></iframe>
					   </div>			 
		        </div> 
		     </div>

		   <div class="col-lg-4 col-md-12">
		      <div class="card" style="min-height:485">
          <div class="card-header card-header-text">
					      <h4 class="card-title">Número de Fallecidos en 2020</h4>
						  <p class="category">Fuente: Registro Estadístico de Defunciones Generales. INEC (2020)</p>
					   </div>
					   <div class="card-content table-responsive">
             <iframe src="img/Mapas_EDG_Highcharts/Area2020.html" height="500px" width="100%" ></iframe>
					   </div>				 

		   </div> 

		     </div>
			  </div>

        <h3>Fallecimientos por Sexo y Grupo Etário.</h3>
    <div class="row">
			     <div class="col-lg-4 col-md-12">
				   <div class="card" style="min-height:485px">
				       <div class="card-header card-header-text">
					      <h4 class="card-title">Número de Fallecidos en 2018 </h4>
						  <p class="category">Fuente: Registro Estadístico de Defunciones Generales. INEC (2018)</p>
					   </div>
					   <div class="card-content table-responsive" >
              
             <div id="d3"style="width:100%; height:490px;float: left;"></div>
              <script>
              $.getJSON( "json/b2018.JSON", function( d3 ) {

                  var categories = [
                      '(5,10]','(10,15]','(15,20]','(20,25]','(25,30]','(30,35]','(35,40]','(40,45]','(45,50]',
                      '(50,55]','(55,60]','(60,65]','(65,70]','(70,75]', '(75,80]','(80,85]','(85 o Más]'
              ];

              Highcharts.chart('d3', {
                  chart: {
                      type: 'bar',
                      zoomType: "xy"
                  },
                  title: {
                      align: 'center',
                      text: ''
                  },
                  accessibility: {
                      point: {
                          valueDescriptionFormat: '{index}. Edad {xDescription}, {value}%.'
                      }
                  },
                  legend: {
                      floating: false,
                      borderWidth: 1,
                      backgroundColor:
                          Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
                      shadow: true
                  },
                  xAxis: [{
                      categories: categories,
                      reversed: true,
                      labels: {
                          step: 1
                      },
                      accessibility: {
                          description: 'Años (Hombre)'
                      }
                  }, { // mirror axis on right side
                      opposite: true,
                      reversed: false,
                      categories: categories,
                      linkedTo: 0,
                      labels: {
                          step: 1
                      },
                      accessibility: {
                          description: 'Años (Mujer)'
                      }
                  }],
                  yAxis: {
                      title: {
                          text: null
                      },
                      labels: {
                          formatter: function () {
                              return Math.abs(this.value);
                          }
                      },
                      accessibility: {
                          description: 'Percentage population',
                          rangeDescription: 'Range: 0 to 5%'
                      }
                  },

                  plotOptions: {
                      series: {
                          stacking: 'normal'
                      }
                  },

                  tooltip: {
                      animation:false,
                      followPointer:true,
                      formatter: function () {
                          return '<b>' + this.series.name + ', años ' + this.point.category + '</b><br/>' +
                              'Población: ' + Highcharts.numberFormat(Math.abs(this.point.y),0);
                      }
                  },

                  series: d3,
                  colors: ['#4171ff','#e41346']
              }); //fin de Highcharts

              }); //fin de JSON

              </script>
             

             
					   </div>
				   </div>

		     
		   </div>
		   
		   <div class="col-lg-4 col-md-12">
		      <div class="card" style="min-height:485">
          <div class="card-header card-header-text">
					      <h4 class="card-title">Número de Fallecidos en 2019</h4>
						  <p class="category">Fuente: Registro Estadístico de Defunciones Generales. INEC (2019)</p>
					   </div>
					   <div class="card-content table-responsive">

             <div id="d2"style="width:100%; height:490px;float: left;"></div>
<script>
 $.getJSON( "json/b2019.JSON", function( d2 ) {

    var categories = [
        '(5,10]','(10,15]','(15,20]','(20,25]','(25,30]','(30,35]','(35,40]','(40,45]','(45,50]',
        '(50,55]','(55,60]','(60,65]','(65,70]','(70,75]', '(75,80]','(80,85]','(85 o Más]'
];

Highcharts.chart('d2', {
    chart: {
        type: 'bar',
        zoomType: "xy"
    },
    title: {
        align: 'center',
        text: ''
    },
    accessibility: {
        point: {
            valueDescriptionFormat: '{index}. Edad {xDescription}, {value}%.'
        }
    },
    legend: {
        floating: false,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    xAxis: [{
        categories: categories,
        reversed: true,
        labels: {
            step: 1
        },
        accessibility: {
            description: 'Años (Hombre)'
        }
    }, { // mirror axis on right side
        opposite: true,
        reversed: false,
        categories: categories,
        linkedTo: 0,
        labels: {
            step: 1
        },
        accessibility: {
            description: 'Años (Mujer)'
        }
    }],
    yAxis: {
        title: {
            text: null
        },
        labels: {
            formatter: function () {
                return Math.abs(this.value);
            }
        },
        accessibility: {
            description: 'Percentage population',
            rangeDescription: 'Range: 0 to 5%'
        }
    },

    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },

    tooltip: {
        animation:false,
        followPointer:true,
        formatter: function () {
            return '<b>' + this.series.name + ', años ' + this.point.category + '</b><br/>' +
                'Población: ' + Highcharts.numberFormat(Math.abs(this.point.y),0);
        }
    },

    series: d2,
    colors: ['#4171ff','#e41346']
}); //fin de Highcharts

}); //fin de JSON

</script>

					   </div>			 

		   </div> 

		     </div>

		   <div class="col-lg-4 col-md-12">
		      <div class="card" style="min-height:485">
          <div class="card-header card-header-text">
					      <h4 class="card-title">Número de Fallecidos en 2020</h4>
						  <p class="category">Fuente: Registro Estadístico de Defunciones Generales. INEC (2020)</p>
					   </div>
					   <div class="card-content table-responsive">
             <div id="d1"style="width:100%; height:490px;float: left;"></div>
<script>
 $.getJSON( "json/b2020.JSON", function( d1 ) {

    var categories = [
        '(5,10]','(10,15]','(15,20]','(20,25]','(25,30]','(30,35]','(35,40]','(40,45]','(45,50]',
        '(50,55]','(55,60]','(60,65]','(65,70]','(70,75]', '(75,80]','(80,85]','(85 o Más]'
];

Highcharts.chart('d1', {
    chart: {
        type: 'bar',
        zoomType: "xy"
    },
    title: {
        align: 'center',
        text: ''
    },
    accessibility: {
        point: {
            valueDescriptionFormat: '{index}. Edad {xDescription}, {value}%.'
        }
    },
    legend: {
        floating: false,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    xAxis: [{
        categories: categories,
        reversed: true,
        labels: {
            step: 1
        },
        accessibility: {
            description: 'Años (Hombre)'
        }
    }, { // mirror axis on right side
        opposite: true,
        reversed: false,
        categories: categories,
        linkedTo: 0,
        labels: {
            step: 1
        },
        accessibility: {
            description: 'Años (Mujer)'
        }
    }],
    yAxis: {
        title: {
            text: null
        },
        labels: {
            formatter: function () {
                return Math.abs(this.value);
            }
        },
        accessibility: {
            description: 'Percentage population',
            rangeDescription: 'Range: 0 to 5%'
        }
    },

    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },

    tooltip: {
        animation:false,
        followPointer:true,
        formatter: function () {
            return '<b>' + this.series.name + ', años ' + this.point.category + '</b><br/>' +
                'Población: ' + Highcharts.numberFormat(Math.abs(this.point.y),0);
        }
    },

    series: d1,
    colors: ['#4171ff','#e41346']
}); //fin de Highcharts

}); //fin de JSON

</script>
					   </div>				 

		   </div> 

		     </div>
			  </div>
  

  </div>



<div id="pe" class="w3-container city" style="display:none">
<div class="w3-container">
<h2><b>Índices de Incidencia por Causa de Muertes Más Comunes en Ecuador por Sexo</b></h2>

<div class="row">
<div class="col-lg-12 col-md-12">
<div class="card" style="min-height:500">
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-pb0m{border-color:inherit;text-align:center;vertical-align:bottom}
.tg .tg-9wq8{border-color:inherit;text-align:center;vertical-align:middle}
.tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
</style>
<table class="table-responsive-lg table-bordered">
<thead>
  <tr>
    <th class="tg-pb0m"></th>
    <th scope="col" colspan="3"> <b>Mujer</b> </th>
    <th scope="col" colspan="3"><b>Hombre</b></th>
  </tr>
</thead>
<tbody>
  <tr>
    <th scope="row">Clasificación</th>
    <th scope="col">Bajo</th>
    <th scope="col">Medio</th>
    <th scope="col">Alto</th>
    <th scope="col">Bajo</th>
    <th scope="col">Medio</th>
    <th scope="col">Alto</th>
  </tr>
  <tr>
    <th scope="row">COVID-19</th>
    <td class="tg-9wq8">-0.022</td>
    <td class="tg-9wq8">-0.004</td>
    <td class="tg-9wq8">0.036</td>
    <td class="tg-9wq8">-0.022</td>
    <td class="tg-9wq8">-0.002</td>
    <td class="tg-9wq8">0.034</td>
  </tr>
  <tr>
    <th scope="row">Tumores&nbsp;&nbsp;&nbsp;Malignos neoplasias</th>
    <td class="tg-9wq8">-0.061</td>
    <td class="tg-9wq8">-0.013</td>
    <td class="tg-9wq8">0.092</td>
    <td class="tg-pb0m">-0.064</td>
    <td class="tg-pb0m">-0.008</td>
    <td class="tg-pb0m">0.099</td>
  </tr>
  <tr>
    <th scope="row">Diabetes&nbsp;&nbsp;&nbsp;mellitus</th>
    <td class="tg-9wq8">-0.068</td>
    <td class="tg-9wq8">-0.01</td>
    <td class="tg-9wq8">0.107</td>
    <td class="tg-pb0m">-0.067</td>
    <td class="tg-pb0m">-0.009</td>
    <td class="tg-pb0m">0.098</td>
  </tr>
  <tr>
    <th scope="row">Enfermedades&nbsp;&nbsp;&nbsp;hipertensivas</th>
    <td class="tg-9wq8">-0.069</td>
    <td class="tg-9wq8">-0.011</td>
    <td class="tg-9wq8">0.108</td>
    <td class="tg-pb0m">-0.07</td>
    <td class="tg-pb0m">-0.007</td>
    <td class="tg-pb0m">0.111</td>
  </tr>
  <tr>
    <th scope="row">Infarto agudo&nbsp;&nbsp;&nbsp;del miocardio</th>
    <td class="tg-9wq8">-0.072</td>
    <td class="tg-9wq8">-0.011</td>
    <td class="tg-9wq8">0.116</td>
    <td class="tg-9wq8">-0.073</td>
    <td class="tg-9wq8">-0.007</td>
    <td class="tg-9wq8">0.114</td>
  </tr>
  <tr>
    <th scope="row">Enfermedades&nbsp;&nbsp;&nbsp;cerebrovasculares</th>
    <td class="tg-9wq8">-0.069</td>
    <td class="tg-9wq8">-0.01</td>
    <td class="tg-9wq8">0.115</td>
    <td class="tg-9wq8">-0.069</td>
    <td class="tg-9wq8">-0.008</td>
    <td class="tg-9wq8">0.109</td>
  </tr>
  <tr>
    <th scope="row">Influenza,&nbsp;&nbsp;&nbsp;gripe y neumonía</th>
    <td class="tg-9wq8">-0.071</td>
    <td class="tg-9wq8">-0.012</td>
    <td class="tg-9wq8">0.107</td>
    <td class="tg-9wq8">-0.063</td>
    <td class="tg-9wq8">-0.007</td>
    <td class="tg-9wq8">0.099</td>
  </tr>
  <tr>
    <th scope="row">Fibrosis y&nbsp;&nbsp;&nbsp;cirrosis del hígado</th>
    <td class="tg-9wq8">-0.051</td>
    <td class="tg-9wq8">-0.008</td>
    <td class="tg-9wq8">0.082</td>
    <td class="tg-9wq8">-0.052</td>
    <td class="tg-9wq8">-0.006</td>
    <td class="tg-9wq8">0.078</td>
  </tr>
  <tr>
    <th scope="row">Insuficiencia&nbsp;&nbsp;&nbsp;renal crónica</th>
    <td class="tg-9wq8">-0.068</td>
    <td class="tg-9wq8">-0.011</td>
    <td class="tg-9wq8">0.109</td>
    <td class="tg-9wq8">-0.072</td>
    <td class="tg-9wq8">-0.006</td>
    <td class="tg-9wq8">0.112</td>
  </tr>
</tbody>
</table>
</div>
</div>

</div>
<h2><b>Índices de Incidencia por Causa de Muertes para Hombres.</b></h2>
<div class="row">
       <div class="col-lg-12 col-md-12">
				   <div class="card" style="min-height:485px">
				       <div class="card-header card-header-text">
					      <h4 class="card-title">Evolución Causas de Muerte</h4>
						  <p class="category">Modelo Triádico Parcial</p>
					   </div>
					   <div class="card-content table-responsive">
             <div id="h5"style="width:100%; height:490px;float: left;"></div>
<script>
 $.getJSON( "json/intr1H.JSON", function( data4 ) {

   Highcharts.chart('h5', {
    chart: {
        type: "spline",
        zoomType: "xy"
    },
    title: {
        align: 'center',
        text: ''
    },
    xAxis: {
        title: {

            text: 'Dimensión 1'
        },
        labels: {
            format: '{value} '
        },
        lineWidth: 0,
        minorGridLineWidth: 0,
        lineColor: 'transparent',
            labels: {
            enabled: false
        },
        minorTickLength: 0,
        tickLength: 0,
        plotLines: [{
            color: 'black',
            dashStyle: 'solid',
            width: 2,
            value: 0,
            label: {
                rotation: 0,
                y: 0
                }
        }]
    },
    yAxis: {
        title: {
            text: 'Dimensión 2'
        },
        labels: {
            format: '{value} '
        },
        lineWidth: 0,
        gridLineColor: 'transparent',
        minorGridLineWidth: 0,
        lineColor: 'transparent',
        labels: {
        enabled: false
        },
        minorTickLength: 0,
        tickLength: 0,
        plotLines: [{
            color: 'black',
            dashStyle: 'solid',
            width: 2,
            value: 0,
            label: {
                rotation: 0,
                x: 0
                }
        }]

    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle',
        floating: false,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    plotOptions: {
        series: {
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        },
            dataLabels: {
                enabled: true,
                format: '{point.name}'  
    }
},
tooltip: {
        animation:false,
        followPointer:true,
        useHTML: true,
        headerFormat: '<table>',
        pointFormat: '<tr><th colspan="1"><h3>{series.name}</h1></th></tr>' +
            '<tr><th>Coord X:</th><td>{point.x}</td></tr>' +
            '<tr><th>Coord Y:</th><td>{point.y}</td></tr>' 
            ,
        footerFormat: '</table>'
    },

    series: data4,

responsive: {
    rules: [{
        condition: {
            maxWidth: 500
        },
        chartOptions: {
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            }
        }
    }]
}
}); //fin de Highcharts

}); //fin de JSON
</script>

					   </div>
				   </div>
		   </div>

		</div>

    <div class="row">
    <div class="col-lg-6 col-md-12">
		      <div class="card" style="min-height:485">
          <div class="card-header card-header-text">
					      <h4 class="card-title">COVID-19</h4>
					   </div>
					   <div class="card-content table-responsive">
             <div id="in1"style="width:100%; height:490px;float: left;"></div>
<script>
 $.getJSON( "json/icov.JSON", function( din1 ) {

    var categories = [
        '(5,10]','(10,15]','(15,20]','(20,25]','(25,30]','(30,35]','(35,40]','(40,45]','(45,50]',
        '(50,55]','(55,60]','(60,65]','(65,70]','(70,75]', '(75,80]','(80,85]','(85 o Más]'
];

Highcharts.chart('in1', {
    chart: {
        type: "spline",
        zoomType: "xy",
        inverted: true
    },
    title: {
        align: 'center',
        text: ''
    },
    accessibility: {
        point: {
            valueDescriptionFormat: '{index}. Edad {xDescription}, {value}%.'
        }
    },
    legend: {
        floating: false,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    xAxis: [{
        categories: categories,
        reversed: false,
        labels: {
            step: 1
        },
        accessibility: {
            description: 'Años (Hombre)'
        }

    }],
    yAxis: {
        title: {
            text: null
        },
        labels: {
            formatter: function () {
                return Math.abs(this.value);
            }
        },
         plotBands: [{
            from: -0.022,
            to: 0.034,
            color: 'rgba(255, 255, 0, 0.2)',
            width: 1,
            label: {
                formatter: function () {
                    return 'Riesgo Medio ';
                }
            }
        }]
    },

    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },

    tooltip: {
        animation:false,
        followPointer:true,
        formatter: function () {
            return '<b>' + this.series.name + ', años ' + this.point.category + '</b><br/>'+
                'Puntaje del Factor: ' + Highcharts.numberFormat((this.point.y),4);
        }
    },

    series: din1,
    colors:["#0094b6","#b62200","#e44813","#e41346","#ba1615"]
}); //fin de Highcharts

}); //fin de JSON

</script>
					   </div>			 
		        </div> 
		</div>

    <div class="col-lg-6 col-md-12">
		      <div class="card" style="min-height:485">
          <div class="card-header card-header-text">
					      <h4 class="card-title">Tumores Malignos Neoplasias</h4>
					   </div>
					   <div class="card-content table-responsive">
             <div id="in2"style="width:100%; height:490px;float: left;"></div>
<script>
 $.getJSON( "json/iCgroup.JSON", function( din2 ) {

    var categories = [
        '(5,10]','(10,15]','(15,20]','(20,25]','(25,30]','(30,35]','(35,40]','(40,45]','(45,50]',
        '(50,55]','(55,60]','(60,65]','(65,70]','(70,75]', '(75,80]','(80,85]','(85 o Más]'
];

Highcharts.chart('in2', {
    chart: {
        type: "spline",
        zoomType: "xy",
        inverted: true
    },
    title: {
        align: 'center',
        text: ''
    },
    accessibility: {
        point: {
            valueDescriptionFormat: '{index}. Edad {xDescription}, {value}%.'
        }
    },
    legend: {
        floating: false,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    xAxis: [{
        categories: categories,
        reversed: false,
        labels: {
            step: 1
        },
        accessibility: {
            description: 'Años (Hombre)'
        }

    }],
    yAxis: {
        title: {
            text: null
        },
        labels: {
            formatter: function () {
                return Math.abs(this.value);
            }
        },
         plotBands: [{
            from: -0.064,
            to: 0.099,
            color: 'rgba(255, 255, 0, 0.2)',
            width: 1,
            label: {
                formatter: function () {
                    return 'Riesgo Medio ';
                }
            }
        }]
    },

    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },

    tooltip: {
        animation:false,
        followPointer:true,
        formatter: function () {
            return '<b>' + this.series.name + ', años ' + this.point.category + '</b><br/>'+
                'Puntaje del Factor: ' + Highcharts.numberFormat((this.point.y),4);
        }
    },

    series: din2,
    colors:["#0094b6","#b62200","#e44813","#e41346","#ba1615"]
}); //fin de Highcharts

}); //fin de JSON

</script>
					   </div>			 
		        </div> 
		</div>
		</div>
    
    <div class="row">
    <div class="col-lg-6 col-md-12">
		      <div class="card" style="min-height:485">
          <div class="card-header card-header-text">
					      <h4 class="card-title">Diabetes Mellitus</h4>
					   </div>
					   <div class="card-content table-responsive">
             <div id="in3"style="width:100%; height:490px;float: left;"></div>
<script>
 $.getJSON( "json/iEgroup.JSON", function( din3 ) {

    var categories = [
        '(5,10]','(10,15]','(15,20]','(20,25]','(25,30]','(30,35]','(35,40]','(40,45]','(45,50]',
        '(50,55]','(55,60]','(60,65]','(65,70]','(70,75]', '(75,80]','(80,85]','(85 o Más]'
];

Highcharts.chart('in3', {
    chart: {
        type: "spline",
        zoomType: "xy",
        inverted: true
    },
    title: {
        align: 'center',
        text: ''
    },
    accessibility: {
        point: {
            valueDescriptionFormat: '{index}. Edad {xDescription}, {value}%.'
        }
    },
    legend: {
        floating: false,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    xAxis: [{
        categories: categories,
        reversed: false,
        labels: {
            step: 1
        },
        accessibility: {
            description: 'Años (Hombre)'
        }

    }],
    yAxis: {
        title: {
            text: null
        },
        labels: {
            formatter: function () {
                return Math.abs(this.value);
            }
        },
         plotBands: [{
            from: -0.067,
            to: 0.098,
            color: 'rgba(255, 255, 0, 0.2)',
            width: 1,
            label: {
                formatter: function () {
                    return 'Riesgo Medio ';
                }
            }
        }]
    },

    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },

    tooltip: {
        animation:false,
        followPointer:true,
        formatter: function () {
            return '<b>' + this.series.name + ', años ' + this.point.category + '</b><br/>'+
                'Puntaje del Factor: ' + Highcharts.numberFormat((this.point.y),4);
        }
    },

    series: din3,
    colors:["#0094b6","#b62200","#e44813","#e41346","#ba1615"]
}); //fin de Highcharts

}); //fin de JSON

</script>
					   </div>			 
		        </div> 
		</div>

    <div class="col-lg-6 col-md-12">
		      <div class="card" style="min-height:485">
          <div class="card-header card-header-text">
					      <h4 class="card-title">Enfermedades Hipertensivas</h4>
					   </div>
					   <div class="card-content table-responsive">
             <div id="in4"style="width:100%; height:490px;float: left;"></div>
<script>
 $.getJSON( "json/iI1group.JSON", function( din4 ) {

    var categories = [
        '(5,10]','(10,15]','(15,20]','(20,25]','(25,30]','(30,35]','(35,40]','(40,45]','(45,50]',
        '(50,55]','(55,60]','(60,65]','(65,70]','(70,75]', '(75,80]','(80,85]','(85 o Más]'
];

Highcharts.chart('in4', {
    chart: {
        type: "spline",
        zoomType: "xy",
        inverted: true
    },
    title: {
        align: 'center',
        text: ''
    },
    accessibility: {
        point: {
            valueDescriptionFormat: '{index}. Edad {xDescription}, {value}%.'
        }
    },
    legend: {
        floating: false,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    xAxis: [{
        categories: categories,
        reversed: false,
        labels: {
            step: 1
        },
        accessibility: {
            description: 'Años (Hombre)'
        }

    }],
    yAxis: {
        title: {
            text: null
        },
        labels: {
            formatter: function () {
                return Math.abs(this.value);
            }
        },
         plotBands: [{
            from: -0.07,
            to: 0.111,
            color: 'rgba(255, 255, 0, 0.2)',
            width: 1,
            label: {
                formatter: function () {
                    return 'Riesgo Medio ';
                }
            }
        }]
    },

    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },

    tooltip: {
        animation:false,
        followPointer:true,
        formatter: function () {
            return '<b>' + this.series.name + ', años ' + this.point.category + '</b><br/>'+
                'Puntaje del Factor: ' + Highcharts.numberFormat((this.point.y),4);
        }
    },

    series: din4,
    colors:["#0094b6","#b62200","#e44813","#e41346","#ba1615"]
}); //fin de Highcharts

}); //fin de JSON

</script>
					   </div>			 
		        </div> 
		</div>
		</div>  

    <div class="row">
    <div class="col-lg-6 col-md-12">
		      <div class="card" style="min-height:485">
          <div class="card-header card-header-text">
					      <h4 class="card-title">Infarto Agudo Del Miocardio</h4>
					   </div>
					   <div class="card-content table-responsive">
             <div id="in5"style="width:100%; height:490px;float: left;"></div>
<script>
 $.getJSON( "json/iI2group.JSON", function( din5 ) {

    var categories = [
        '(5,10]','(10,15]','(15,20]','(20,25]','(25,30]','(30,35]','(35,40]','(40,45]','(45,50]',
        '(50,55]','(55,60]','(60,65]','(65,70]','(70,75]', '(75,80]','(80,85]','(85 o Más]'
];

Highcharts.chart('in5', {
    chart: {
        type: "spline",
        zoomType: "xy",
        inverted: true
    },
    title: {
        align: 'center',
        text: ''
    },
    accessibility: {
        point: {
            valueDescriptionFormat: '{index}. Edad {xDescription}, {value}%.'
        }
    },
    legend: {
        floating: false,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    xAxis: [{
        categories: categories,
        reversed: false,
        labels: {
            step: 1
        },
        accessibility: {
            description: 'Años (Hombre)'
        }

    }],
    yAxis: {
        title: {
            text: null
        },
        labels: {
            formatter: function () {
                return Math.abs(this.value);
            }
        },
         plotBands: [{
            from: -0.073,
            to: 0.114,
            color: 'rgba(255, 255, 0, 0.2)',
            width: 1,
            label: {
                formatter: function () {
                    return 'Riesgo Medio ';
                }
            }
        }]
    },

    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },

    tooltip: {
        animation:false,
        followPointer:true,
        formatter: function () {
            return '<b>' + this.series.name + ', años ' + this.point.category + '</b><br/>'+
                'Puntaje del Factor: ' + Highcharts.numberFormat((this.point.y),4);
        }
    },

    series: din5,
    colors:["#0094b6","#b62200","#e44813","#e41346","#ba1615"]
}); //fin de Highcharts

}); //fin de JSON

</script>
					   </div>			 
		        </div> 
		</div>

    <div class="col-lg-6 col-md-12">
		      <div class="card" style="min-height:485">
          <div class="card-header card-header-text">
					      <h4 class="card-title">Enfermedades Cerebrovasculares	</h4>
					   </div>
					   <div class="card-content table-responsive">
             <div id="in6"style="width:100%; height:490px;float: left;"></div>
<script>
 $.getJSON( "json/iI3group.JSON", function( din6 ) {

    var categories = [
        '(5,10]','(10,15]','(15,20]','(20,25]','(25,30]','(30,35]','(35,40]','(40,45]','(45,50]',
        '(50,55]','(55,60]','(60,65]','(65,70]','(70,75]', '(75,80]','(80,85]','(85 o Más]'
];

Highcharts.chart('in6', {
    chart: {
        type: "spline",
        zoomType: "xy",
        inverted: true
    },
    title: {
        align: 'center',
        text: ''
    },
    accessibility: {
        point: {
            valueDescriptionFormat: '{index}. Edad {xDescription}, {value}%.'
        }
    },
    legend: {
        floating: false,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    xAxis: [{
        categories: categories,
        reversed: false,
        labels: {
            step: 1
        },
        accessibility: {
            description: 'Años (Hombre)'
        }

    }],
    yAxis: {
        title: {
            text: null
        },
        labels: {
            formatter: function () {
                return Math.abs(this.value);
            }
        },
         plotBands: [{
            from: -0.069,
            to: 0.109,
            color: 'rgba(255, 255, 0, 0.2)',
            width: 1,
            label: {
                formatter: function () {
                    return 'Riesgo Medio ';
                }
            }
        }]
    },

    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },

    tooltip: {
        animation:false,
        followPointer:true,
        formatter: function () {
            return '<b>' + this.series.name + ', años ' + this.point.category + '</b><br/>'+
                'Puntaje del Factor: ' + Highcharts.numberFormat((this.point.y),4);
        }
    },

    series: din6,
    colors:["#0094b6","#b62200","#e44813","#e41346","#ba1615"]
}); //fin de Highcharts

}); //fin de JSON

</script>
					   </div>			 
		        </div> 
		</div>
		</div>  

    <div class="row">
    <div class="col-lg-6 col-md-12">
		      <div class="card" style="min-height:485">
          <div class="card-header card-header-text">
					      <h4 class="card-title">Influenza,Gripe Y Neumonía</h4>
					   </div>
					   <div class="card-content table-responsive">
             <div id="in7"style="width:100%; height:490px;float: left;"></div>
<script>
 $.getJSON( "json/iJgroup.JSON", function( din7 ) {

    var categories = [
        '(5,10]','(10,15]','(15,20]','(20,25]','(25,30]','(30,35]','(35,40]','(40,45]','(45,50]',
        '(50,55]','(55,60]','(60,65]','(65,70]','(70,75]', '(75,80]','(80,85]','(85 o Más]'
];

Highcharts.chart('in7', {
    chart: {
        type: "spline",
        zoomType: "xy",
        inverted: true
    },
    title: {
        align: 'center',
        text: ''
    },
    accessibility: {
        point: {
            valueDescriptionFormat: '{index}. Edad {xDescription}, {value}%.'
        }
    },
    legend: {
        floating: false,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    xAxis: [{
        categories: categories,
        reversed: false,
        labels: {
            step: 1
        },
        accessibility: {
            description: 'Años (Hombre)'
        }

    }],
    yAxis: {
        title: {
            text: null
        },
        labels: {
            formatter: function () {
                return Math.abs(this.value);
            }
        },
         plotBands: [{
            from: -0.063,
            to: 0.099,
            color: 'rgba(255, 255, 0, 0.2)',
            width: 1,
            label: {
                formatter: function () {
                    return 'Riesgo Medio ';
                }
            }
        }]
    },

    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },

    tooltip: {
        animation:false,
        followPointer:true,
        formatter: function () {
            return '<b>' + this.series.name + ', años ' + this.point.category + '</b><br/>'+
                'Puntaje del Factor: ' + Highcharts.numberFormat((this.point.y),4);
        }
    },

    series: din7,
    colors:["#0094b6","#b62200","#e44813","#e41346","#ba1615"]
}); //fin de Highcharts

}); //fin de JSON

</script>
					   </div>			 
		        </div> 
		</div>

    <div class="col-lg-6 col-md-12">
		      <div class="card" style="min-height:485">
          <div class="card-header card-header-text">
					      <h4 class="card-title">Fibrosis Y Cirrosis Del Hígado</h4>
					   </div>
					   <div class="card-content table-responsive">
<div id="in8"style="width:100%; height:490px;float: left;"></div>
<script>
 $.getJSON( "json/iKgroup.JSON", function( din8 ) {

    var categories = [
        '(5,10]','(10,15]','(15,20]','(20,25]','(25,30]','(30,35]','(35,40]','(40,45]','(45,50]',
        '(50,55]','(55,60]','(60,65]','(65,70]','(70,75]', '(75,80]','(80,85]','(85 o Más]'
];

Highcharts.chart('in8', {
    chart: {
        type: "spline",
        zoomType: "xy",
        inverted: true
    },
    title: {
        align: 'center',
        text: ''
    },
    accessibility: {
        point: {
            valueDescriptionFormat: '{index}. Edad {xDescription}, {value}%.'
        }
    },
    legend: {
        floating: false,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    xAxis: [{
        categories: categories,
        reversed: false,
        labels: {
            step: 1
        },
        accessibility: {
            description: 'Años (Hombre)'
        }

    }],
    yAxis: {
        title: {
            text: null
        },
        labels: {
            formatter: function () {
                return Math.abs(this.value);
            }
        },
         plotBands: [{
            from: -0.052,
            to: 0.078,
            color: 'rgba(255, 255, 0, 0.2)',
            width: 1,
            label: {
                formatter: function () {
                    return 'Riesgo Medio ';
                }
            }
        }]
    },

    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },

    tooltip: {
        animation:false,
        followPointer:true,
        formatter: function () {
            return '<b>' + this.series.name + ', años ' + this.point.category + '</b><br/>'+
                'Puntaje del Factor: ' + Highcharts.numberFormat((this.point.y),4);
        }
    },

    series: din8,
    colors:["#0094b6","#b62200","#e44813","#e41346","#ba1615"]
}); //fin de Highcharts

}); //fin de JSON

</script>
					   </div>			 
		        </div> 
		</div>
		</div>

    <div class="row">
    <div class="col-lg-6 col-md-12">
		      <div class="card" style="min-height:485">
          <div class="card-header card-header-text">
					      <h4 class="card-title">Insuficiencia Renal Crónica</h4>

					   </div>
					   <div class="card-content table-responsive">
             <div id="in9"style="width:100%; height:490px;float: left;"></div>
<script>
 $.getJSON( "json/iNgroup.JSON", function( din9 ) {

    var categories = [
        '(5,10]','(10,15]','(15,20]','(20,25]','(25,30]','(30,35]','(35,40]','(40,45]','(45,50]',
        '(50,55]','(55,60]','(60,65]','(65,70]','(70,75]', '(75,80]','(80,85]','(85 o Más]'
];

Highcharts.chart('in9', {
    chart: {
        type: "spline",
        zoomType: "xy",
        inverted: true
    },
    title: {
        align: 'center',
        text: ''
    },
    accessibility: {
        point: {
            valueDescriptionFormat: '{index}. Edad {xDescription}, {value}%.'
        }
    },
    legend: {
        floating: false,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    xAxis: [{
        categories: categories,
        reversed: false,
        labels: {
            step: 1
        },
        accessibility: {
            description: 'Años (Hombre)'
        }
    }],
    yAxis: {
        title: {
            text: null
        },
        labels: {
            formatter: function () {
                return Math.abs(this.value);
            }
        },
         plotBands: [{
            from: -0.072,
            to: 0.112,
            color: 'rgba(255, 255, 0, 0.2)',
            width: 1,
            label: {
                formatter: function () {
                    return 'Riesgo Medio ';
                }
            }
        }]

    },

    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },

    tooltip: {
        animation:false,
        followPointer:true,
        formatter: function () {
            return '<b>' + this.series.name + ', años ' + this.point.category + '</b><br/>'+
                'Puntaje del Factor: ' + Highcharts.numberFormat((this.point.y),4);
        }
    },

    series: din9,
    colors:["#0094b6","#b62200","#e44813","#e41346","#ba1615"]
}); //fin de Highcharts

}); //fin de JSON

</script>
					   </div>			 
		        </div> 
		</div>

    <div class="col-lg-6 col-md-12">
		      <div class="card" style="min-height:485">
          <div class="card-header card-header-text">
					      <h4 class="card-title">General</h4>

					   </div>
					   <div class="card-content table-responsive">
             <div id="in"style="width:100%; height:490px;float: left;"></div>
<script>
 $.getJSON( "json/indice.JSON", function( din ) {

    var categories = [
        '(5,10]','(10,15]','(15,20]','(20,25]','(25,30]','(30,35]','(35,40]','(40,45]','(45,50]',
        '(50,55]','(55,60]','(60,65]','(65,70]','(70,75]', '(75,80]','(80,85]','(85 o Más]'
];

Highcharts.chart('in', {
    chart: {
        type: "column",
        zoomType: "xy",
        inverted: true
    },
    title: {
        align: 'center',
        text: ''
    },
    accessibility: {
        point: {
            valueDescriptionFormat: '{index}. Edad {xDescription}, {value}%.'
        }
    },
    legend: {
        floating: false,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    xAxis: [{
        categories: categories,
        reversed: false,
        labels: {
            step: 1
        },
        accessibility: {
            description: 'Años (Hombre)'
        }

    }],
    yAxis: {
        title: {
            text: null
        },
        labels: {
            formatter: function () {
                return Math.abs(this.value);
            }
        }
    },

    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },

    tooltip: {
        animation:false,
        followPointer:true,
        formatter: function () {
            return '<b>' + this.series.name + ', años ' + this.point.category + '</b><br/>'+
                'Puntaje del Factor: ' + Highcharts.numberFormat((this.point.y),4);
        }
    },

    series: din
}); //fin de Highcharts

}); //fin de JSON

</script>
					   </div>			 
		        </div> 
		</div>
		</div>

<!--////////////////////////////////////////MUJERES//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

    <h2><b>Índices de Incidencia por Causa de Muertes para Mujeres.</b></h2>
<div class="row">
       <div class="col-lg-12 col-md-12">
				   <div class="card" style="min-height:485px">
				       <div class="card-header card-header-text">
					      <h4 class="card-title">Evolución Causas de Muertes</h4>
						  <p class="category">Modelo Triádico Parcial</p>
					   </div>
					   <div class="card-content table-responsive">
             <div id="m5"style="width:100%; height:490px;float: left;"></div>
<script>
 $.getJSON( "json/intr1M.JSON", function( datam4 ) {

   Highcharts.chart('m5', {
    chart: {
        type: "spline",
        zoomType: "xy"
    },
    title: {
        align: 'center',
        text: ''
    },
    xAxis: {
        title: {

            text: 'Dimensión 1'
        },
        labels: {
            format: '{value} '
        },
        lineWidth: 0,
        minorGridLineWidth: 0,
        lineColor: 'transparent',
            labels: {
            enabled: false
        },
        minorTickLength: 0,
        tickLength: 0,
        plotLines: [{
            color: 'black',
            dashStyle: 'solid',
            width: 2,
            value: 0,
            label: {
                rotation: 0,
                y: 0
                }
        }]
    },
    yAxis: {
        title: {
            text: 'Dimensión 2'
        },
        labels: {
            format: '{value} '
        },
        lineWidth: 0,
        gridLineColor: 'transparent',
        minorGridLineWidth: 0,
        lineColor: 'transparent',
        labels: {
        enabled: false
        },
        minorTickLength: 0,
        tickLength: 0,
        plotLines: [{
            color: 'black',
            dashStyle: 'solid',
            width: 2,
            value: 0,
            label: {
                rotation: 0,
                x: 0
                }
        }]

    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle',
        floating: false,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    plotOptions: {
        series: {
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        },
            dataLabels: {
                enabled: true,
                format: '{point.name}'  
    }
},
tooltip: {
        animation:false,
        followPointer:true,
        useHTML: true,
        headerFormat: '<table>',
        pointFormat: '<tr><th colspan="1"><h3>{series.name}</h1></th></tr>' +
            '<tr><th>Coord X:</th><td>{point.x}</td></tr>' +
            '<tr><th>Coord Y:</th><td>{point.y}</td></tr>' 
            ,
        footerFormat: '</table>'
    },

    series: datam4,

responsive: {
    rules: [{
        condition: {
            maxWidth: 500
        },
        chartOptions: {
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            }
        }
    }]
}
}); //fin de Highcharts

}); //fin de JSON
</script>

					   </div>
				   </div>
		   </div>

		</div>

    <div class="row">
    <div class="col-lg-6 col-md-12">
		      <div class="card" style="min-height:485">
          <div class="card-header card-header-text">
					      <h4 class="card-title">COVID-19</h4>
					   </div>
					   <div class="card-content table-responsive">
             <div id="in1M"style="width:100%; height:490px;float: left;"></div>
<script>
 $.getJSON( "json/icovM.JSON", function( din1M ) {

    var categories = [
        '(5,10]','(10,15]','(15,20]','(20,25]','(25,30]','(30,35]','(35,40]','(40,45]','(45,50]',
        '(50,55]','(55,60]','(60,65]','(65,70]','(70,75]', '(75,80]','(80,85]','(85 o Más]'
];

Highcharts.chart('in1M', {
    chart: {
        type: "spline",
        zoomType: "xy",
        inverted: true
    },
    title: {
        align: 'center',
        text: ''
    },
    accessibility: {
        point: {
            valueDescriptionFormat: '{index}. Edad {xDescription}, {value}%.'
        }
    },
    legend: {
        floating: false,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    xAxis: [{
        categories: categories,
        reversed: false,
        labels: {
            step: 1
        },
        accessibility: {
            description: 'Años (Hombre)'
        }

    }],
    yAxis: {
        title: {
            text: null
        },
        labels: {
            formatter: function () {
                return Math.abs(this.value);
            }
        },
         plotBands: [{
            from: -0.022,
            to: 0.036,
            color: 'rgba(255, 255, 0, 0.2)',
            width: 1,
            label: {
                formatter: function () {
                    return 'Riesgo Medio ';
                }
            }
        }]
    },

    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },

    tooltip: {
        animation:false,
        followPointer:true,
        formatter: function () {
            return '<b>' + this.series.name + ', años ' + this.point.category + '</b><br/>'+
                'Puntaje del Factor: ' + Highcharts.numberFormat((this.point.y),4);
        }
    },

    series: din1M,
    colors:["#0094b6","#b62200","#e44813","#e41346","#ba1615"]
}); //fin de Highcharts

}); //fin de JSON

</script>

					   </div>			 
		        </div> 
		</div>

    <div class="col-lg-6 col-md-12">
		      <div class="card" style="min-height:485">
          <div class="card-header card-header-text">
					      <h4 class="card-title">Tumores Malignos Neoplasias</h4>
					   </div>
					   <div class="card-content table-responsive">
             <div id="in2M"style="width:100%; height:490px;float: left;"></div>
<script>
 $.getJSON( "json/iCgroupM.JSON", function( din2M ) {

    var categories = [
        '(5,10]','(10,15]','(15,20]','(20,25]','(25,30]','(30,35]','(35,40]','(40,45]','(45,50]',
        '(50,55]','(55,60]','(60,65]','(65,70]','(70,75]', '(75,80]','(80,85]','(85 o Más]'
];

Highcharts.chart('in2M', {
    chart: {
        type: "spline",
        zoomType: "xy",
        inverted: true
    },
    title: {
        align: 'center',
        text: ''
    },
    accessibility: {
        point: {
            valueDescriptionFormat: '{index}. Edad {xDescription}, {value}%.'
        }
    },
    legend: {
        floating: false,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    xAxis: [{
        categories: categories,
        reversed: false,
        labels: {
            step: 1
        },
        accessibility: {
            description: 'Años (Hombre)'
        }

    }],
    yAxis: {
        title: {
            text: null
        },
        labels: {
            formatter: function () {
                return Math.abs(this.value);
            }
        },
         plotBands: [{
            from: -0.061,
            to: 0.092,
            color: 'rgba(255, 255, 0, 0.2)',
            width: 1,
            label: {
                formatter: function () {
                    return 'Riesgo Medio ';
                }
            }
        }]
    },

    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },

    tooltip: {
        animation:false,
        followPointer:true,
        formatter: function () {
            return '<b>' + this.series.name + ', años ' + this.point.category + '</b><br/>'+
                'Puntaje del Factor: ' + Highcharts.numberFormat((this.point.y),4);
        }
    },

    series: din2M,
    colors:["#0094b6","#b62200","#e44813","#e41346","#ba1615"]
}); //fin de Highcharts

}); //fin de JSON

</script>
					   </div>			 
		        </div> 
		</div>
		</div>
    
    <div class="row">
    <div class="col-lg-6 col-md-12">
		      <div class="card" style="min-height:485">
          <div class="card-header card-header-text">
					      <h4 class="card-title">Diabetes Mellitus</h4>
					   </div>
					   <div class="card-content table-responsive">
             <div id="in3M"style="width:100%; height:490px;float: left;"></div>
<script>
 $.getJSON( "json/iEgroupM.JSON", function( din3M ) {

    var categories = [
        '(5,10]','(10,15]','(15,20]','(20,25]','(25,30]','(30,35]','(35,40]','(40,45]','(45,50]',
        '(50,55]','(55,60]','(60,65]','(65,70]','(70,75]', '(75,80]','(80,85]','(85 o Más]'
];

Highcharts.chart('in3M', {
    chart: {
        type: "spline",
        zoomType: "xy",
        inverted: true
    },
    title: {
        align: 'center',
        text: ''
    },
    accessibility: {
        point: {
            valueDescriptionFormat: '{index}. Edad {xDescription}, {value}%.'
        }
    },
    legend: {
        floating: false,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    xAxis: [{
        categories: categories,
        reversed: false,
        labels: {
            step: 1
        },
        accessibility: {
            description: 'Años (Hombre)'
        }

    }],
    yAxis: {
        title: {
            text: null
        },
        labels: {
            formatter: function () {
                return Math.abs(this.value);
            }
        },
         plotBands: [{
            from: -0.068,
            to: 0.107,
            color: 'rgba(255, 255, 0, 0.2)',
            width: 1,
            label: {
                formatter: function () {
                    return 'Riesgo Medio ';
                }
            }
        }]
    },

    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },

    tooltip: {
        animation:false,
        followPointer:true,
        formatter: function () {
            return '<b>' + this.series.name + ', años ' + this.point.category + '</b><br/>'+
                'Puntaje del Factor: ' + Highcharts.numberFormat((this.point.y),4);
        }
    },

    series: din3M,
    colors:["#0094b6","#b62200","#e44813","#e41346","#ba1615"]
}); //fin de Highcharts

}); //fin de JSON

</script>
					   </div>			 
		        </div> 
		</div>

    <div class="col-lg-6 col-md-12">
		      <div class="card" style="min-height:485">
          <div class="card-header card-header-text">
					      <h4 class="card-title">Enfermedades Hipertensivas</h4>
					   </div>
					   <div class="card-content table-responsive">
             <div id="in4M"style="width:100%; height:490px;float: left;"></div>
<script>
 $.getJSON( "json/iI1groupM.JSON", function( din4M ) {

    var categories = [
        '(5,10]','(10,15]','(15,20]','(20,25]','(25,30]','(30,35]','(35,40]','(40,45]','(45,50]',
        '(50,55]','(55,60]','(60,65]','(65,70]','(70,75]', '(75,80]','(80,85]','(85 o Más]'
];

Highcharts.chart('in4M', {
    chart: {
        type: "spline",
        zoomType: "xy",
        inverted: true
    },
    title: {
        align: 'center',
        text: ''
    },
    accessibility: {
        point: {
            valueDescriptionFormat: '{index}. Edad {xDescription}, {value}%.'
        }
    },
    legend: {
        floating: false,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    xAxis: [{
        categories: categories,
        reversed: false,
        labels: {
            step: 1
        },
        accessibility: {
            description: 'Años (Hombre)'
        }

    }],
    yAxis: {
        title: {
            text: null
        },
        labels: {
            formatter: function () {
                return Math.abs(this.value);
            }
        },
         plotBands: [{
            from: -0.069,
            to: 0.108,
            color: 'rgba(255, 255, 0, 0.2)',
            width: 1,
            label: {
                formatter: function () {
                    return 'Riesgo Medio ';
                }
            }
        }]
    },

    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },

    tooltip: {
        animation:false,
        followPointer:true,
        formatter: function () {
            return '<b>' + this.series.name + ', años ' + this.point.category + '</b><br/>'+
                'Puntaje del Factor: ' + Highcharts.numberFormat((this.point.y),4);
        }
    },

    series: din4M,
    colors:["#0094b6","#b62200","#e44813","#e41346","#ba1615"]
}); //fin de Highcharts

}); //fin de JSON

</script>
					   </div>			 
		        </div> 
		</div>
		</div>  

    <div class="row">
    <div class="col-lg-6 col-md-12">
		      <div class="card" style="min-height:485">
          <div class="card-header card-header-text">
					      <h4 class="card-title">Infarto Agudo Del Miocardio</h4>
					   </div>
					   <div class="card-content table-responsive">
             <div id="in5M"style="width:100%; height:490px;float: left;"></div>
<script>
 $.getJSON( "json/iI2groupM.JSON", function( din5M ) {

    var categories = [
        '(5,10]','(10,15]','(15,20]','(20,25]','(25,30]','(30,35]','(35,40]','(40,45]','(45,50]',
        '(50,55]','(55,60]','(60,65]','(65,70]','(70,75]', '(75,80]','(80,85]','(85 o Más]'
];

Highcharts.chart('in5M', {
    chart: {
        type: "spline",
        zoomType: "xy",
        inverted: true
    },
    title: {
        align: 'center',
        text: ''
    },
    accessibility: {
        point: {
            valueDescriptionFormat: '{index}. Edad {xDescription}, {value}%.'
        }
    },
    legend: {
        floating: false,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    xAxis: [{
        categories: categories,
        reversed: false,
        labels: {
            step: 1
        },
        accessibility: {
            description: 'Años (Hombre)'
        }

    }],
    yAxis: {
        title: {
            text: null
        },
        labels: {
            formatter: function () {
                return Math.abs(this.value);
            }
        },
         plotBands: [{
            from: -0.072,
            to: 0.116,
            color: 'rgba(255, 255, 0, 0.2)',
            width: 1,
            label: {
                formatter: function () {
                    return 'Riesgo Medio ';
                }
            }
        }]
    },

    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },

    tooltip: {
        animation:false,
        followPointer:true,
        formatter: function () {
            return '<b>' + this.series.name + ', años ' + this.point.category + '</b><br/>'+
                'Puntaje del Factor: ' + Highcharts.numberFormat((this.point.y),4);
        }
    },

    series: din5M,
    colors:["#0094b6","#b62200","#e44813","#e41346","#ba1615"]
}); //fin de Highcharts

}); //fin de JSON

</script>
					   </div>			 
		        </div> 
		</div>

    <div class="col-lg-6 col-md-12">
		      <div class="card" style="min-height:485">
          <div class="card-header card-header-text">
					      <h4 class="card-title">Enfermedades Cerebrovasculares	</h4>
					   </div>
					   <div class="card-content table-responsive">
             <div id="in6M"style="width:100%; height:490px;float: left;"></div>
<script>
 $.getJSON( "json/iI3groupM.JSON", function( din6M ) {

    var categories = [
        '(5,10]','(10,15]','(15,20]','(20,25]','(25,30]','(30,35]','(35,40]','(40,45]','(45,50]',
        '(50,55]','(55,60]','(60,65]','(65,70]','(70,75]', '(75,80]','(80,85]','(85 o Más]'
];

Highcharts.chart('in6M', {
    chart: {
        type: "spline",
        zoomType: "xy",
        inverted: true
    },
    title: {
        align: 'center',
        text: ''
    },
    accessibility: {
        point: {
            valueDescriptionFormat: '{index}. Edad {xDescription}, {value}%.'
        }
    },
    legend: {
        floating: false,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    xAxis: [{
        categories: categories,
        reversed: false,
        labels: {
            step: 1
        },
        accessibility: {
            description: 'Años (Hombre)'
        }

    }],
    yAxis: {
        title: {
            text: null
        },
        labels: {
            formatter: function () {
                return Math.abs(this.value);
            }
        },
         plotBands: [{
            from: -0.069,
            to: 0.115,
            color: 'rgba(255, 255, 0, 0.2)',
            width: 1,
            label: {
                formatter: function () {
                    return 'Riesgo Medio ';
                }
            }
        }]
    },

    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },

    tooltip: {
        animation:false,
        followPointer:true,
        formatter: function () {
            return '<b>' + this.series.name + ', años ' + this.point.category + '</b><br/>'+
                'Puntaje del Factor: ' + Highcharts.numberFormat((this.point.y),4);
        }
    },

    series: din6M,
    colors:["#0094b6","#b62200","#e44813","#e41346","#ba1615"]
}); //fin de Highcharts

}); //fin de JSON

</script>
					   </div>			 
		        </div> 
		</div>
		</div>  

    <div class="row">
    <div class="col-lg-6 col-md-12">
		      <div class="card" style="min-height:485">
          <div class="card-header card-header-text">
					      <h4 class="card-title">Influenza,Gripe Y Neumonía</h4>
					   </div>
					   <div class="card-content table-responsive">
             <div id="in7M"style="width:100%; height:490px;float: left;"></div>
<script>
 $.getJSON( "json/iJgroupM.JSON", function( din7M ) {

    var categories = [
        '(5,10]','(10,15]','(15,20]','(20,25]','(25,30]','(30,35]','(35,40]','(40,45]','(45,50]',
        '(50,55]','(55,60]','(60,65]','(65,70]','(70,75]', '(75,80]','(80,85]','(85 o Más]'
];

Highcharts.chart('in7M', {
    chart: {
        type: "spline",
        zoomType: "xy",
        inverted: true
    },
    title: {
        align: 'center',
        text: ''
    },
    accessibility: {
        point: {
            valueDescriptionFormat: '{index}. Edad {xDescription}, {value}%.'
        }
    },
    legend: {
        floating: false,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    xAxis: [{
        categories: categories,
        reversed: false,
        labels: {
            step: 1
        },
        accessibility: {
            description: 'Años (Hombre)'
        }

    }],
    yAxis: {
        title: {
            text: null
        },
        labels: {
            formatter: function () {
                return Math.abs(this.value);
            }
        },
         plotBands: [{
            from: -0.071,
            to: 0.107,
            color: 'rgba(255, 255, 0, 0.2)',
            width: 1,
            label: {
                formatter: function () {
                    return 'Riesgo Medio ';
                }
            }
        }]
    },

    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },

    tooltip: {
        animation:false,
        followPointer:true,
        formatter: function () {
            return '<b>' + this.series.name + ', años ' + this.point.category + '</b><br/>'+
                'Puntaje del Factor: ' + Highcharts.numberFormat((this.point.y),4);
        }
    },

    series: din7M,
    colors:["#0094b6","#b62200","#e44813","#e41346","#ba1615"]
}); //fin de Highcharts

}); //fin de JSON

</script>
					   </div>			 
		        </div> 
		</div>

    <div class="col-lg-6 col-md-12">
		      <div class="card" style="min-height:485">
          <div class="card-header card-header-text">
					      <h4 class="card-title">Fibrosis Y Cirrosis Del Hígado</h4>
					   </div>
					   <div class="card-content table-responsive">
             <div id="in8M"style="width:100%; height:490px;float: left;"></div>
<script>
 $.getJSON( "json/iKgroupM.JSON", function( din8M ) {

    var categories = [
        '(5,10]','(10,15]','(15,20]','(20,25]','(25,30]','(30,35]','(35,40]','(40,45]','(45,50]',
        '(50,55]','(55,60]','(60,65]','(65,70]','(70,75]', '(75,80]','(80,85]','(85 o Más]'
];

Highcharts.chart('in8M', {
    chart: {
        type: "spline",
        zoomType: "xy",
        inverted: true
    },
    title: {
        align: 'center',
        text: ''
    },
    accessibility: {
        point: {
            valueDescriptionFormat: '{index}. Edad {xDescription}, {value}%.'
        }
    },
    legend: {
        floating: false,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    xAxis: [{
        categories: categories,
        reversed: false,
        labels: {
            step: 1
        },
        accessibility: {
            description: 'Años (Hombre)'
        }

    }],
    yAxis: {
        title: {
            text: null
        },
        labels: {
            formatter: function () {
                return Math.abs(this.value);
            }
        },
         plotBands: [{
            from: -0.051,
            to: 0.082,
            color: 'rgba(255, 255, 0, 0.2)',
            width: 1,
            label: {
                formatter: function () {
                    return 'Riesgo Medio ';
                }
            }
        }]
    },

    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },

    tooltip: {
        animation:false,
        followPointer:true,
        formatter: function () {
            return '<b>' + this.series.name + ', años ' + this.point.category + '</b><br/>'+
                'Puntaje del Factor: ' + Highcharts.numberFormat((this.point.y),4);
        }
    },

    series: din8M,
    colors:["#0094b6","#b62200","#e44813","#e41346","#ba1615"]
}); //fin de Highcharts

}); //fin de JSON

</script>
					   </div>			 
		        </div> 
		</div>
		</div>

    <div class="row">
    <div class="col-lg-6 col-md-12">
		      <div class="card" style="min-height:485">
          <div class="card-header card-header-text">
					      <h4 class="card-title">Insuficiencia Renal Crónica</h4>

					   </div>
					   <div class="card-content table-responsive">
             <div id="in9M"style="width:100%; height:490px;float: left;"></div>
<script>
 $.getJSON( "json/iNgroupM.JSON", function( din9M ) {

    var categories = [
        '(5,10]','(10,15]','(15,20]','(20,25]','(25,30]','(30,35]','(35,40]','(40,45]','(45,50]',
        '(50,55]','(55,60]','(60,65]','(65,70]','(70,75]', '(75,80]','(80,85]','(85 o Más]'
];

Highcharts.chart('in9M', {
    chart: {
        type: "spline",
        zoomType: "xy",
        inverted: true
    },
    title: {
        align: 'center',
        text: ''
    },
    accessibility: {
        point: {
            valueDescriptionFormat: '{index}. Edad {xDescription}, {value}%.'
        }
    },
    legend: {
        floating: false,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    xAxis: [{
        categories: categories,
        reversed: false,
        labels: {
            step: 1
        },
        accessibility: {
            description: 'Años (Hombre)'
        }
    }],
    yAxis: {
        title: {
            text: null
        },
        labels: {
            formatter: function () {
                return Math.abs(this.value);
            }
        },
         plotBands: [{
            from: -0.068,
            to: 0.109,
            color: 'rgba(255, 255, 0, 0.2)',
            width: 1,
            label: {
                formatter: function () {
                    return 'Riesgo Medio ';
                }
            }
        }]

    },

    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },

    tooltip: {
        animation:false,
        followPointer:true,
        formatter: function () {
            return '<b>' + this.series.name + ', años ' + this.point.category + '</b><br/>'+
                'Puntaje del Factor: ' + Highcharts.numberFormat((this.point.y),4);
        }
    },

    series: din9M,
    colors:["#0094b6","#b62200","#e44813","#e41346","#ba1615"]
}); //fin de Highcharts

}); //fin de JSON

</script>
					   </div>			 
		        </div> 
		</div>

    <div class="col-lg-6 col-md-12">
		      <div class="card" style="min-height:485">
          <div class="card-header card-header-text">
					      <h4 class="card-title">General</h4>

					   </div>
					   <div class="card-content table-responsive">
             <div id="inM"style="width:100%; height:490px;float: left;"></div>
<script>
 $.getJSON( "json/indiceM.JSON", function( dinM ) {

    var categories = [
        '(5,10]','(10,15]','(15,20]','(20,25]','(25,30]','(30,35]','(35,40]','(40,45]','(45,50]',
        '(50,55]','(55,60]','(60,65]','(65,70]','(70,75]', '(75,80]','(80,85]','(85 o Más]'
];

Highcharts.chart('inM', {
    chart: {
        type: "column",
        zoomType: "xy",
        inverted: true
    },
    title: {
        align: 'center',
        text: ''
    },
    accessibility: {
        point: {
            valueDescriptionFormat: '{index}. Edad {xDescription}, {value}%.'
        }
    },
    legend: {
        floating: false,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    xAxis: [{
        categories: categories,
        reversed: false,
        labels: {
            step: 1
        },
        accessibility: {
            description: 'Años (Hombre)'
        }

    }],
    yAxis: {
        title: {
            text: null
        },
        labels: {
            formatter: function () {
                return Math.abs(this.value);
            }
        }
    },

    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },

    tooltip: {
        animation:false,
        followPointer:true,
        formatter: function () {
            return '<b>' + this.series.name + ', años ' + this.point.category + '</b><br/>'+
                'Puntaje del Factor: ' + Highcharts.numberFormat((this.point.y),4);
        }
    },

    series: dinM
}); //fin de Highcharts

}); //fin de JSON

</script>
					   </div>			 
		        </div> 
		</div>
		</div>




</div>
</div>


    




<div id="mab" class="w3-container city" style="display:none">

<style>
.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>

    <h2></h2>
    <div class="row">
			     <div class="col-lg-6 col-md-12">
           <h2 style="text-align:center">Autor</h2>

             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

              <div class="card1">
                <img src="img/Perfiles/user.jpg" alt="Miguel" style="width:100%">
                <h1>Miguel Moran</h1>
                <p class="title">Estudiante</p>
                <p>ESPOL</p>
                <a href="https://www.linkedin.com/in/mianmora/"><i class="fa fa-linkedin"></i></a>
                <a href="https://github.com/Miguel00567"><i class="fa fa-github"></i></a>
                <a href="mailto:mianmora@espol.edu.ec?subject = Feedback&body = Message"><p><button>Contacto</button></p></a>
              </div>
		      </div>


       <div class="col-lg-6 col-md-12">
       <h2 style="text-align:center">Autor</h2>
       <div class="card1">
                <img src="img/Perfiles/william.jfif" alt="William" style="width:100%">
                <h1>William Tandazo</h1>
                <p class="title">Estudiante</p>
                <p>ESPOL</p>
                <a href="https://www.linkedin.com/in/william-fernando-tandazo-21a2061a6/"><i class="fa fa-linkedin"></i></a>
                <a href="https://github.com/WilliamFernando97"><i class="fa fa-github"></i></a>
                <a href="mailto:wtandazo@espol.edu.ec?subject = Feedback&body = Message"><p><button>Contacto</button></p></a>
        </div>

		     
		   </div>

			</div>

      <div class="row">

      </div>

  </div>

</div>
<!-- END MAIN -->



<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-blue-grey", ""); 
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-theme-blue-grey";
}
</script>

<script>
// Script to open and close the sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

function w3_show_nav(name) {
  document.getElementById("menuTut").style.display = "none";
  document.getElementById(name).style.display = "block";
  w3-open();
}
</script>

<script src="https://www.w3schools.com/lib/w3codecolor.js"></script>

<script>
w3CodeColor();
</script>



