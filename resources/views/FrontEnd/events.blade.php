<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Table with Add and Delete Row Feature</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #404E67;
    background: #F5F7FA;
    font-family: 'Open Sans', sans-serif;
}
.table-wrapper {
    width: 1100px;
    margin: 30px auto;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
}
.table-title h2 {
    margin: 6px 0 0;
    font-size: 22px;
}
.table-title .add-new {
    float: right;
    height: 30px;
    font-weight: bold;
    font-size: 12px;
    text-shadow: none;
    min-width: 100px;
    border-radius: 50px;
    line-height: 13px;
}
.table-title .add-new i {
    margin-right: 4px;
}
table.table {
    table-layout: fixed;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table th:last-child {
    width: 100px;
}
table.table td a {
    cursor: pointer;
    display: inline-block;
    margin: 0 5px;
    min-width: 24px;
}
table.table td a.add {
    color: #27C46B;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}
table.table td a.add i {
    font-size: 24px;
    margin-right: -1px;
    position: relative;
    top: 3px;
}
table.table .form-control {
    height: 32px;
    line-height: 32px;
    box-shadow: none;
    border-radius: 2px;
}
table.table .form-control.error {
    border-color: #f50000;
}
table.table td .add {
    display: none;
}
</style>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
	var actions = $("table td:last-child").html();
	// Append table with add row form on add new button click
    $(".add-new").click(function(){
		$(this).attr("disabled", "disabled");
		var index = $("table tbody tr:last-child").index();
        var row = '<tr>' +
            '<td><input type="text" class="form-control" name="Titre" id="Titre"></td>' +
            '<td><input type="text" class="form-control" name="Organisation" id="Organisation"></td>' +
            '<td><input type="text" class="form-control" name="Type" id="Type"></td>' +
            '<td><input type="text" class="form-control" name="Categorie" id="Categorie"></td>' +
            '<td><input type="text" class="form-control" name="Visibilite" id="Visibilite"></td>' +
			'<td>' + actions + '</td>' +
        '</tr>';
    	$("table").append(row);
		$("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
        $('[data-toggle="tooltip"]').tooltip();
    });
	// Add row on add button click
	$(document).on("click", ".add", function(){
		var empty = false;
		var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
			if(!$(this).val()){
				$(this).addClass("error");
				empty = true;
			} else{
                $(this).removeClass("error");
            }
		});
		$(this).parents("tr").find(".error").first().focus();
		if(!empty){
			input.each(function(){
				$(this).parent("td").html($(this).val());
			});
			$(this).parents("tr").find(".add, .edit").toggle();
			$(".add-new").removeAttr("disabled");
		}
    });
	// Edit row on edit button click
	$(document).on("click", ".edit", function(){
        $(this).parents("tr").find("td:not(:last-child)").each(function(){
			$(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
		});
		$(this).parents("tr").find(".add, .edit").toggle();
		$(".add-new").attr("disabled", "disabled");
    });
	// Delete row on delete button click
	$(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
		$(".add-new").removeAttr("disabled");
    });
});
</script>
</head>
<body>
<<<<<<< HEAD
<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Events <b>Details</b></h2></div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New event</button>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Organisation</th>
                        <th>Type</th>
                        <th>Catégorie</th>
                        <th> Visibilié </th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ensa event</td>
                        <td>Ensa</td>
                        <td>webinair</td>
                        <td>Bioinformatique</td>
                        <td>Public</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Conf 1</td>
                        <td>ENSA Tanger</td>
                        <td>Conférence</td>
                        <td>Big data / sciences de données </td>
                        <td>Privé </td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Sém 1</td>
                        <td>ENSA Kenitra</td>
                        <td>Séminaire</td>
                        <td>Bioinformatique</td>
                        <td>Public</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
=======
  <div class="lines-wrap">
    <div class="lines-inner">
      <div class="lines"></div>
    </div>
  </div>
  <!-- END lines -->
  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>
  <nav class="site-nav dark mb-5">
    <div class="container">
      <div class="site-navigation">
        <a href="index.html" class="logo m-0">Events App <span class="text-primary">.</span></a>

        <ul class="js-clone-nav d-none d-lg-inline-block site-menu float-right">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="/about">Categories</a></li>
          <li><a href="/events">Events</a></li>
          <li><a href="/registre">Registre</a></li>
          <li><a href="/faq">FAQ</a></li>
          <li><a href="/contact">Contact us</a></li>
        </ul>
        
        <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
          <span></span>
        </a>

      </div>
    </div>
  </nav>
  

  <div class="untree_co--hero" style="background-image: url('images/bg_1.jpg')">

  
  <div class="services-v1">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4">
          <div class="service" data-aos="fade-up" data-aos-delay="0">
            <span class="icon-wrap">
              <span class="icon-screen_share"></span>
            </span>
            <h3>Inspire</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
            <p><a href="#">Read more</a></p>
          </div> <!-- /.service -->
        </div> <!-- /.col-md-4 -->
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4">
          <div class="service" data-aos="fade-up" data-aos-delay="100">
            <span class="icon-wrap">
              <span class="icon-settings_brightness"></span>
            </span>
            <h3>Create</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
            <p><a href="#">Read more</a></p>
          </div> <!-- /.service -->
        </div> <!-- /.col-md-4 -->
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4">
          <div class="service" data-aos="fade-up" data-aos-delay="200">
            <span class="icon-wrap">
              <span class="icon-lightbulb_outline"></span>
            </span>
            <h3>Innovate</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
            <p><a href="#">Read more</a></p>
          </div> <!-- /.service -->
        </div> <!-- /.col-md-4 -->
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4">
          <div class="service" data-aos="fade-up" data-aos-delay="300">
            <span class="icon-wrap">
              <span class="icon-highlight"></span>
            </span>
            <h3>Publish</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
            <p><a href="#">Read more</a></p>
          </div> <!-- /.service -->
        </div> <!-- /.col-md-4 -->

        <div class="col-sm-6 col-md-6 col-lg-3 mb-4">
          <div class="service" data-aos="fade-up" data-aos-delay="0">
            <span class="icon-wrap">
              <span class="icon-heart"></span>
            </span>
            <h3>Inspire</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
            <p><a href="#">Read more</a></p>
          </div> <!-- /.service -->
        </div> <!-- /.col-md-4 -->
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4">
          <div class="service" data-aos="fade-up" data-aos-delay="100">
            <span class="icon-wrap">
              <span class="icon-university"></span>
            </span>
            <h3>Create</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
            <p><a href="#">Read more</a></p>
          </div> <!-- /.service -->
        </div> <!-- /.col-md-4 -->
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4">
          <div class="service" data-aos="fade-up" data-aos-delay="200">
            <span class="icon-wrap">
              <span class="icon-toggle-on"></span>
            </span>
            <h3>Innovate</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
            <p><a href="#">Read more</a></p>
          </div> <!-- /.service -->
        </div> <!-- /.col-md-4 -->
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4">
          <div class="service" data-aos="fade-up" data-aos-delay="300">
            <span class="icon-wrap">
              <span class="icon-bicycle"></span>
            </span>
            <h3>Publish</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
            <p><a href="#">Read more</a></p>
          </div> <!-- /.service -->
        </div> <!-- /.col-md-4 -->

        <div class="col-sm-6 col-md-6 col-lg-3 mb-4">
          <div class="service" data-aos="fade-up" data-aos-delay="0">
            <span class="icon-wrap">
              <span class="icon-angellist"></span>
            </span>
            <h3>Inspire</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
            <p><a href="#">Read more</a></p>
          </div> <!-- /.service -->
        </div> <!-- /.col-md-4 -->
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4">
          <div class="service" data-aos="fade-up" data-aos-delay="100">
            <span class="icon-wrap">
              <span class="icon-forumbee"></span>
            </span>
            <h3>Create</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
            <p><a href="#">Read more</a></p>
          </div> <!-- /.service -->
        </div> <!-- /.col-md-4 -->
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4">
          <div class="service" data-aos="fade-up" data-aos-delay="200">
            <span class="icon-wrap">
              <span class="icon-cart-arrow-down"></span>
            </span>
            <h3>Innovate</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
            <p><a href="#">Read more</a></p>
          </div> <!-- /.service -->
        </div> <!-- /.col-md-4 -->
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4">
          <div class="service" data-aos="fade-up" data-aos-delay="300">
            <span class="icon-wrap">
              <span class="icon-chrome"></span>
            </span>
            <h3>Publish</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
            <p><a href="#">Read more</a></p>
          </div> <!-- /.service -->
        </div> <!-- /.col-md-4 -->
      </div> <!-- /.row -->

    </div> <!-- /.container -->
  </div>
  
  <div class="untree_co-section feature bg-light">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-5 mx-auto">
          <h3>Help Us by Sharing Our Works</h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>


          <p>
            <strong class="d-block text-black">Carl Anderson</strong>
            <span>Co-Founder & CEO</span>
          </p>
        </div> <!-- /.col-lg-6 -->
        <div class="col-lg-6">
          <img src="images/about_1.jpg" alt="Image" class="img-fluid">
        </div> <!-- /.col-lg-4 -->
      </div> <!-- /.row -->
    </div> <!-- /.container -->
  </div> <!-- /.feature -->

  <div class="site-footer">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 mx-auto text-center">
          <h2 class="mb-4">Help Us Spread Our Works</h2>
          <p><a href="https://untree.co/" target="_blank" class="btn btn-primary text-white">Share them to social media! Thanks :)</a></p>
        </div> <!-- /.col-lg-7 -->
      </div> <!-- /.row -->
      <div class="row">
        <div class="col-lg-4">
          <div class="widget">
            <h3>Contact</h3>
            <address>43 Raymouth Rd. Baltemoer, London 3910</address>
            <ul class="list-unstyled links">
              <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
              <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
              <li><a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="widget">
            <h3>Sources</h3>
            <ul class="list-unstyled float-left links">
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Vision</a></li>
              <li><a href="#">Mission</a></li>
              <li><a href="#">Terms</a></li>
              <li><a href="#">Privacy</a></li>
            </ul>
            <ul class="list-unstyled float-left links">
              <li><a href="#">Partners</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Creative</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="widget">
            <h3>Links</h3>
            <ul class="list-unstyled links">
              <li><a href="#">Our Vision</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Contact us</a></li>
            </ul>

            <ul class="list-unstyled social">
              <li><a href="#"><span class="icon-instagram"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-linkedin"></span></a></li>
              <li><a href="#"><span class="icon-pinterest"></span></a></li>
              <li><a href="#"><span class="icon-dribbble"></span></a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-4 -->
      </div> <!-- /.row -->
      <div class="row mt-5">
        <div class="col-12 text-center">
          <p class="small mb-0">&copy; 2020. All Rights Reserved. Design by <a href="https://untree.co/" target="_blank" class="text-primary"><strong>Untree.co</strong></a></p>
          <p class="small">
            <span class="mx-2">Twitter <a href="https://twitter.com/untree_co">@Untree_co</a></span>
            <span>&bullet;</span>
            <span class="mx-2">Facebook <a href="https://web.facebook.com/Untree.co">@Untree.co</a></span>
          </p>

>>>>>>> f4cb6ddb3ccfc5ac002e8db07e0a08149cde9f2a
        </div>
    </div>
</div>
</body>
</html>
