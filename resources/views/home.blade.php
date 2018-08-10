@extends('layouts.user.app')

@section('content')
<section id="sliderSection">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="slick_slider">
                <div class="single_iteam">
                    <a href="#"> <img src="{{ asset('images/slider_img4.jpg') }}" alt=""></a>
                    <div class="slider_article">
                        <h2><a class="slider_tittle" href="#">Fusce eu nulla semper porttitor felis sit amet</a></h2>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="latest_post">
                <h2><span>Latest post</span></h2>
                <div class="latest_post_container">
                    <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
                    <ul class="latest_postnav">
                        <li>
                            <div class="media"> <a href="#" class="media-left"> <img alt="" src="{{ asset('images/post_img1.jpg') }}"> </a>
                                <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                            </div>
                        </li>
                        <li>
                            <div class="media"> <a href="#" class="media-left"> <img alt="" src="{{ asset('images/post_img1.jpg') }}"> </a>
                                <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                            </div>
                        </li>
                    </ul>
                    <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contentSection">
    <div class="row">
    @if (isset($categories) && !empty($categories))
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="left_content">
                @for($i = 0; $i < count($categories) -1; $i += 2)
                <div class="fashion_technology_area">
                    <div class="fashion">
                        <div class="single_post_content">
                            <h2><span>{{ $categories[$i]->name }}</span></h2>
                            <ul class="business_catgnav wow fadeInDown">
                                <li>
                                    <figure class="bsbig_fig"> <a href="#" class="featured_img"> <img alt="" src="{{ asset('images/featured_img2.jpg') }}"> <span class="overlay"></span> </a>
                                      <figcaption> <a href="#">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                                    </figure>
                                </li>
                            </ul>
                            @if (isset($categories[$i]->posts) && !empty($categories[$i]->posts))
                            <ul class="spost_nav">
                                @foreach ($categories[$i]->posts->take(2) as $post)
                                <li>
                                    <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="{{ asset('images/post_img1.jpg') }}"> </a>
                                        <div class="media-body"> <a href="#" class="catg_title">{{ $post->title }}</a> </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                    </div>
                    <div class="technology">
                        <div class="single_post_content">
                            <h2><span>{{ $categories[$i + 1]-> name }}</span></h2>
                            <ul class="business_catgnav">
                              <li>
                                <figure class="bsbig_fig wow fadeInDown"> <a href="#" class="featured_img"> <img alt="" src="{{ asset('images/featured_img3.jpg') }}"> <span class="overlay"></span> </a>
                                  <figcaption> <a href="#">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                                  <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                                </figure>
                              </li>
                            </ul>
                            @if (isset($categories[$i + 1]->posts) && !empty($categories[$i]->posts))
                            <ul class="spost_nav">
                                @foreach ($categories[$i + 1]->posts->take(2) as $post)
                                <li>
                                    <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="{{ asset('images/post_img1.jpg') }}"> </a>
                                        <div class="media-body"> <a href="#" class="catg_title">{{ $post->title }}</a> </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
        @endif
        <div class="col-lg-4 col-md-4 col-sm-4">
            <aside class="right_content">
                <div class="single_sidebar">
                    <h2><span>Popular Post</span></h2>
                    <ul class="spost_nav">
                        <li>
                            <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="{{ asset('images/post_img1.jpg') }}"> </a>
                              <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="single_sidebar">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>
                    </ul>
                    <div class="tab-content">
                        @if (isset($categories) && !empty($categories))
                            <div role="tabpanel" class="tab-pane active" id="category">
                                <ul>
                                    @foreach ($categories as $category)
                                        <li class="cat-item"><a href="#">{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div role="tabpanel" class="tab-pane" id="video">
                            <div class="vide_area">
                                <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="comments">
                            <ul class="spost_nav">
                                <li>
                                    <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="{{ asset('images/post_img1.jpg') }}"> </a>
                                        <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single_sidebar wow fadeInDown">
                    <h2><span>Sponsor</span></h2>
                    <a class="sideAdd" href="#"><img src="{{ asset('images/add_img.jpg') }}" alt=""></a> </div>
                    <div class="single_sidebar wow fadeInDown">
                        <h2><span>Category Archive</span></h2>
                        <select class="catgArchive">
                            <option>Select Category</option>
                            <option>Life styles</option>
                        </select>
                    </div>
                <div class="single_sidebar wow fadeInDown">
                    <h2><span>Links</span></h2>
                    <ul>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Rss Feed</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Life &amp; Style</a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection
