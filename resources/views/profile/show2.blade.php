@extends('app')

@section('content')

<style type="text/css">
.bg
{
  width: 100%;
  z-index: 0;
  position: absolute;
}
#card{
    margin-top: 90px;
}
.green{
  color: #37c300;
}
.align{
  text-align: left;
}
</style>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="tab-content">
                    <div class="tab-pane active" id="product-page1">
                        <img src="../assets/img/examples/product-page1.jpg">
                    </div>
                    <div class="tab-pane" id="product-page2">
                        <img src="../assets/img/examples/product-page2.jpg">
                    </div>
                    <div class="tab-pane" id="product-page3">
                        <img src="../assets/img/examples/product-page3.jpg">
                    </div>
                    <div class="tab-pane" id="product-page4">
                        <img src="../assets/img/examples/product-page4.jpg">
                    </div>
                    <div class="tab-pane" id="product-page5">
                        <img src="../assets/img/examples/product-page5.jpg">
                    </div>
                    <div class="tab-pane" id="product-page6">
                        <img src="../assets/img/examples/product-page6.jpg">
                    </div>
                </div>
                <div class="nbs-flexisel-container"><div class="nbs-flexisel-inner"><ul class="nav nav-text nbs-flexisel-ul" role="tablist" id="flexiselDemo1" style="left: -113.75px;">
                            <li class="nbs-flexisel-item" style="width: 113.75px;">
                                <a href="#product-page6" role="tab" data-toggle="tab" aria-expanded="true">
                                    <img src="../assets/img/examples/product-page6-xs.jpg">
                                </a>
                            </li><li class="active nbs-flexisel-item" style="width: 113.75px;">
                                <a href="#product-page1" role="tab" data-toggle="tab" aria-expanded="false">
                                    <img src="../assets/img/examples/product-page1-xs.jpg">
                                </a>
                            </li>
                            <li class="nbs-flexisel-item" style="width: 113.75px;">
                                <a href="#product-page2" role="tab" data-toggle="tab" aria-expanded="false">
                                    <img src="../assets/img/examples/product-page2-xs.jpg">
                                </a>
                            </li>
                            <li class="nbs-flexisel-item" style="width: 113.75px;">
                                <a href="#product-page3" role="tab" data-toggle="tab" aria-expanded="false">
                                    <img src="../assets/img/examples/product-page3-xs.jpg">
                                </a>
                            </li>
                            <li class="nbs-flexisel-item" style="width: 113.75px;">
                                <a href="#product-page4" role="tab" data-toggle="tab" aria-expanded="true">
                                    <img src="../assets/img/examples/product-page4-xs.jpg">
                                </a>
                            </li>
                            <li class="nbs-flexisel-item" style="width: 113.75px;">
                                <a href="#product-page5" role="tab" data-toggle="tab" aria-expanded="true">
                                    <img src="../assets/img/examples/product-page5-xs.jpg">
                                </a>
                            </li>
                            <li class="nbs-flexisel-item" style="width: 113.75px;">
                                <a href="#product-page6" role="tab" data-toggle="tab" aria-expanded="true">
                                    <img src="../assets/img/examples/product-page6-xs.jpg">
                                </a>
                            </li>
                            <li class="active nbs-flexisel-item" style="width: 113.75px;">
                                <a href="#product-page1" role="tab" data-toggle="tab" aria-expanded="false">
                                    <img src="../assets/img/examples/product-page1-xs.jpg">
                                </a>
                            </li><li class="nbs-flexisel-item" style="width: 113.75px;">
                                <a href="#product-page2" role="tab" data-toggle="tab" aria-expanded="false">
                                    <img src="../assets/img/examples/product-page2-xs.jpg">
                                </a>
                            </li><li class="nbs-flexisel-item" style="width: 113.75px;">
                                <a href="#product-page3" role="tab" data-toggle="tab" aria-expanded="false">
                                    <img src="../assets/img/examples/product-page3-xs.jpg">
                                </a>
                            </li><li class="nbs-flexisel-item" style="width: 113.75px;">
                                <a href="#product-page4" role="tab" data-toggle="tab" aria-expanded="true">
                                    <img src="../assets/img/examples/product-page4-xs.jpg">
                                </a>
                            </li><li class="nbs-flexisel-item" style="width: 113.75px;">
                                <a href="#product-page5" role="tab" data-toggle="tab" aria-expanded="true">
                                    <img src="../assets/img/examples/product-page5-xs.jpg">
                                </a>
                            </li></ul></div><div class="nbs-flexisel-nav-left" style="visibility: visible; font-size: 22px; top: 37.5px;"><i class="fa fa-angle-left"></i></div><div class="nbs-flexisel-nav-right" style="visibility: visible; font-size: 22px; top: 37.5px;"><i class="fa fa-angle-right"></i></div></div>
                <div class="clearout"></div>
            </div>
            <div class="col-md-6">
                <div class="product-details">
                    <a href="#">
                        <h3 class="title">Kingsman</h3>
                    </a>
                    <p class="description">
                        Brown single-breasted brushed-wool checked blazer
                    </p>

                    <span class="price">€ 1,930</span>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                    Product Description
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                Immaculately crafted in England using wool from esteemed British cloth house Dormeuile, this Kingsman blazer typifies the line's uncompromising luxury. The dashing check, high armholes and trim silhouette exudes timeless elegance. Keep your look modern by wearing it over a cashmere cardigan and add a little flair with a silk pocket square. This item is small to size, take the next size up. Shown here with a Kingman shirt, cardigan, trousers, tie, pocket square, cufflinks and shoes. Designer exclusively for MR PORTER
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    Size &amp; Fit
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="true">
                            <div class="panel-body">
                                <ul style="padding-left: 20px;">
                                    <li style="list-style-position: outside;"> Fits small to size</li>
                                    <li style="list-style-position: outside;"> Model wears a UK 40R</li>
                                    <li style="list-style-position: outside;"> Model measures: chest 39"/ 99cm, height 6'1"/ 185cm</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Details
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
                            <div class="panel-body">
                                85% wool, 15% linen. Dry-clean only
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Delivery &amp; Return
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" aria-expanded="false">
                            <div class="panel-body">
                                Find out more about our delivery options
                                Please try items in the comfort of your own home. If you don't like them, or they don't fit, we'll happily collect them from your home or office for free.
                            </div>
                        </div>
                    </div>
                </div> <!-- Acordeon  -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-6">
                <div class="actions">
                    <div class="pull-left">
                        <div class="form-group">
                            <select name="huge" class="selectpicker" data-style="btn" data-menu-style="dropdown-blue" style="display: none;">
                                <option value="en" selected="">Select SIze</option>
                                <option value="id">XS</option>
                                <option value="ms">S</option>
                                <option value="ca">M</option>
                                <option value="ca">L</option>
                                <option value="ca">XL</option>
                                <option value="ca">XXL</option>
                            </select><div class="btn-group select"><button class="btn dropdown-toggle clearfix" data-toggle="dropdown"><span class="filter-option">Select SIze</span>&nbsp;<span class="caret"></span></button><span class="dropdown-arrow dropdown-arrow-blue"></span><ul class="dropdown-menu dropdown-blue" role="menu" style="max-height: 169px; overflow-y: auto; min-height: 108px;"><li rel="0" class="selected"><a tabindex="-1" href="#" class=""><span class="">Select SIze</span></a></li><li rel="1"><a tabindex="-1" href="#" class=""><span class="">XS</span></a></li><li rel="2"><a tabindex="-1" href="#" class=""><span class="">S</span></a></li><li rel="3"><a tabindex="-1" href="#" class=""><span class="">M</span></a></li><li rel="4"><a tabindex="-1" href="#" class=""><span class="">L</span></a></li><li rel="5"><a tabindex="-1" href="#" class=""><span class="">XL</span></a></li><li rel="6"><a tabindex="-1" href="#" class=""><span class="">XXL</span></a></li></ul></div>
                        </div>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-danger btn-simple btn-hover" rel="tooltip" title="" data-placement="left" data-original-title="Add to wishlist">
                            <i class="fa fa-heart-o"></i>
                        </button>
                        <button type="button" class="btn btn-fill">Add to Card</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection