@extends('welcome')
@section('content')
  <section class="ftco-section ftco-degree-bg">
	      <div class="container">
	        <div class="row">
	          <div class="col-md-8 ftco-animate">
							@include('layouts.partials.msg')
									<h2 class="mb-3 mt-5">{{$blog->title}}</h2>
										<p><a  href="/blog">
											<img  src="{{ asset('images/blog/'.$blog->image) }}" alt="" class="img-fluid">
										</a></p>
										<p>{{$blog->body}}</p>


         <div class="tag-widget post-tag-container mb-5 mt-5">
	              <!--<div class="tagcloud">
	                <a href="#" class="tag-cloud-link">Life</a>
	                <a href="#" class="tag-cloud-link">Sport</a>
	                <a href="#" class="tag-cloud-link">Tech</a>
	                <a href="#" class="tag-cloud-link">Travel</a>
	              </div>
	            </div>-->

	            <!--<div class="about-author d-flex p-5 bg-light">
	              <div class="bio align-self-md-center mr-5">
	                <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
	              </div>
	              <div class="desc align-self-md-center">
	                <h3>Lance Smith</h3>
	                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
	              </div>
	            </div>-->




	          </div>
						 <!-- .col-md-8 -->
	         <!--<div class="col-md-4 sidebar ftco-animate">
	            <div class="sidebar-box">
	              <form action="#" class="search-form">
	                <div class="form-group">
	                  <span class="icon fa fa-search"></span>
	                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
	                </div>
	              </form>
	            </div>
	           <div class="sidebar-box ftco-animate">
	              <div class="categories">
	                <h3>Adverts</h3>
	                <li><a href="#">Food <span>(12)</span></a></li>
	                <li><a href="#">Dish <span>(22)</span></a></li>
	                <li><a href="#">Desserts <span>(37)</span></a></li>
	                <li><a href="#">Drinks <span>(42)</span></a></li>
	                <li><a href="#">Ocassion <span>(14)</span></a></li>
	              </div>
	            </div>-->

	           <!-- <div class="sidebar-box ftco-animate">
	              <h3>Recent Blog</h3>
	              <div class="block-21 mb-4 d-flex">
	                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
	                <div class="text">
	                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
	                  <div class="meta">
	                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
	                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
	                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
	                  </div>
	                </div>
	              </div>
	              <div class="block-21 mb-4 d-flex">
	                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
	                <div class="text">
	                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
	                  <div class="meta">
	                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
	                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
	                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
	                  </div>
	                </div>
	              </div>
	              <div class="block-21 mb-4 d-flex">
	                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
	                <div class="text">
	                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
	                  <div class="meta">
	                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
	                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
	                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
	                  </div>
	                </div>
	              </div>
	            </div>-->

	            <!--<div class="sidebar-box ftco-animate">
	              <h3>Tag Cloud</h3>
	              <div class="tagcloud">
	                <a href="#" class="tag-cloud-link">dish</a>
	                <a href="#" class="tag-cloud-link">menu</a>
	                <a href="#" class="tag-cloud-link">food</a>
	                <a href="#" class="tag-cloud-link">sweet</a>
	                <a href="#" class="tag-cloud-link">tasty</a>
	                <a href="#" class="tag-cloud-link">delicious</a>
	                <a href="#" class="tag-cloud-link">desserts</a>
	                <a href="#" class="tag-cloud-link">drinks</a>
	              </div>
	            </div>-->

	            <!--<div class="sidebar-box ftco-animate">
	              <h3>Paragraph</h3>
	              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
	            </div>
	          </div>-->

	        </div>
	      </div>
	    </section>
@endsection
