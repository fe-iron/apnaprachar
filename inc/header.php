<?php session_start(); ?>






<style type="text/css">

	/*@import url('https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&display=swap');*/


	@import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap');
	/*@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap');*/
	@import url('https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@600&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap');
	/*@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap');*/



	*{
		margin: 0px;
		padding: 0px;
	}





	.header-part{
		padding: .5rem 3rem;
	}	


	.header-part img{
		width: 110px;
		height: auto;
	}



	p, label{
		font-family: 'Merriweather', serif;
		/*font-family: 'Oswald', sans-serif;*/
	}



	.btn-dark,.btn-info{
		font-family: 'Merriweather', serif;


	}


	.modal .form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + .75rem + 11px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}


button:focus {
    outline: 1px dotted;
    outline: 0px auto -webkit-focus-ring-color;
}

.modal-header {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: start;
    align-items: flex-start;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 1rem 1rem;
    border-bottom: 1px solid #dee2e6;
    border-top-left-radius: calc(.3rem - 1px);
    border-top-right-radius: calc(.3rem - 1px);
   background-image: linear-gradient( 
90deg, rgb(75 101 136) 0%, rgb(136 163 197) 35%, rgb(75 101 135) 100%);
    color: white;
}


.breadcrumb {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding: .65rem 0rem;
    margin-bottom: 1rem;
    list-style: none;
    background-color: #e9ecef00;
    border-radius: .25rem;
    /* color: white; */
}


.breadcrumb-item+.breadcrumb-item::before {
    display: inline-block;
    padding-right: .5rem;
    padding-left: .5rem;
    color: #f6f7f9;
    content: "/";
}


.breadcrumb a{
	color: white;
}

.breadcrumb-item.active {
    color: #ffffff;
}

:target{
	padding-top :40px;

}


.close{
	color: white;
}

.close:hover {
    color: #afaaaa;
    text-decoration: none;
    transition: .2s;


}


.btn-info {
    color: #fff;
    background-color: #d45656;
    border-color: #d45656;
}

.btn-dark {
    color:white!important;
    background-color: #4B6587;
    border-color: #4B6587;
    border-radius: 0.35rem;
}


.btn-primary {
    color: #fff;
    background-color: #4B6587;
    border-color: #4B6587;
}


.btn-info:hover {
    color: #fff;
    background-color: #bd4a4a;
    border-color: #bd4a4a;
}


.btn-primary:hover {
    color: #fff;
    background-color: #36547a;
    border-color: #36547a;
}

.btn-info.focus, .btn-info:focus {
    color: #fff;
    background-color: #f56767;
    border-color: #f56767;
    box-shadow: 0 0 0 0.2rem rgb(58 176 195 / 0%);
}

.btn-info:not(:disabled):not(.disabled).active, .btn-info:not(:disabled):not(.disabled):active, .show>.btn-info.dropdown-toggle {
    color: #fff;
    background-color: #e05151;
    border-color: #ff7878;
}


	/*media-query*/

	@media(max-width: 768px){
		.header-part{
			padding: .5rem 0rem;
		}	


		.header-part img{
			width: 70px;
			height: auto;
		}

	}

	@media (max-width: 700px){
.btn-info, .btn-dark, .btn-primary {
    
    
    padding: 0.2rem .5rem;
    font-size: .8rem;
   font-family: 'Merriweather', serif;
   border-radius: 3px;
}

}


@media(max-width: 576px){

	/*.header-part .quote{
		display: none;
	}*/

	.nav-tabs .nav-link {
    border: 1px solid #0000001f;
    border-top-left-radius: 0rem;
    border-top-right-radius: 0rem;
    color: #585858;
    font-family: 'Source Sans Pro', sans-serif;
    letter-spacing: .5px;
    margin: 0px 5px 5px 0px;
    font-size: 13px;
}


}



@media(max-width: 576px){

.garphics_content .form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: .8rem;
    font-weight: 400;
     font-family: 'Merriweather', serif;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}


::placeholder{

    font-family: 'Merriweather', serif;
    font-size: 12px;

}

	










</style>








<section class="header-part">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md">
				<div class="d-flex">
					<div class="mr-auto p-2">
						<a href="index.php"><img src="images/logo.png"></a>
					</div>
					<div class="p-2">
						<?php 
						if(isset($_SESSION["username"])){ ?>
							<a class=" ">Hi, <?php echo $_SESSION['username']; ?></a>
							<a href="logout.php" class="btn btn-dark ">Logout</a>
						<?php }else{ ?>
							<a href="login.php" class="btn btn-info ">Login/Signup</a>
							
						 <?php } ?>
						
						<a href="" class="btn btn-primary quote" data-toggle="modal" data-target="#exampleModal">Get Quote!</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>








<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Get Quote </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="m-3" action="quote.php" method="post">
					<div class="form-row">
						<div class="col-md mb-3">
							<label>Name*</label>
							<input type="text" class="form-control " placeholder="First name" name="name" required>
						</div>
						<div class="col-md mb-3">
							<label>Mobile*</label>
							<input type="text" class="form-control " name="mobile" placeholder="Mobile" required>
						</div>
						<div class="col-md mb-3">
							<label>Email Id*</label>
							<input type="email" class="form-control " placeholder="Email" name="email" required>
						</div>
					</div>

					<div class="form-row">
						<div class="col-md mb-4">
							<label>Write Description</label>
							<textarea class="form-control" name="desc" rows="3" required></textarea>
						</div>
					</div>

					<div class="form-row">
						<div class="col-md mb-2">
							<button type="submit" class="btn btn-dark float-right">SUBMIT</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>



<!-- 

<form>
	<h6 class="mb-3">Fill Below Form To Book Services</h6>
	<div class="form-row">
		<div class="col-md mb-3">
			<label>Name*</label>
			<input type="text" class="form-control " placeholder="First name">
		</div>
		<div class="col-md mb-3">
			<label>Mobile*</label>
			<input type="text" class="form-control " placeholder="Last name">
		</div>
		<div class="col-md mb-3">
			<label>Email Id*</label>
			<input type="email" class="form-control " placeholder="Email">
		</div>
	</div>

	<div class="form-row">
		<div class="col-md mb-4">
			<label>Write Description</label>
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>
	</div>

	<div class="form-row">
		<div class="col-md mb-2">
			<a href="" class="btn btn-dark float-right">SUBMIT</a>
		</div>
	</div>
</form> -->

</body>
</html>