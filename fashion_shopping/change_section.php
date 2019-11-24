<?php
	$param = $_POST['id'];
	if($param == 'men'){ ?>
		
        <div class="row" style="padding: 10px 55px;">
            <div class="col-sm-4 col-md-4">
                <div class="men-outerware">
                    OUTERWARE
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="men-top">
                    TOP
                </div>
            </div>
             <div class="col-sm-4 col-md-4">
                <div class="men-bottom">
                    BOTTOMS
                </div>
            </div>
        </div>
        

    <?php }elseif($param == 'women'){ ?>
		<div class="row" style="padding: 10px 55px;">
            <div class="col-sm-4 col-md-4">
                <div class="outware">
                    OUTWARE
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="top">
                    TOP
                </div>
            </div>
             <div class="col-sm-4 col-md-4">
                <div class="jumpsuits">
                    JUMPSUITS
                </div>
            </div>
        </div>
        <div class="row" style="padding: 10px 55px;">
           <div class="col-sm-4 col-md-4">
                <div class="jeans">
                    JEANS
                </div>
            </div>
             <div class="col-sm-4 col-md-4">
                <div class="bottoms">
                    BOTTOMS
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="dresses">
                    DRESSES
                </div>
            </div>
        </div>

    <?php }elseif($param == 'kids'){ ?>
	   <div class="row" style="padding: 10px 55px;">
            <div class="col-sm-3 col-md-3">
                <div class="kid-outware">
                    OUTWARE
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="kid-top">
                    TOP
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="kid-bottom">
                    BOTTOM
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="kid-dresses">
                    JUMPSUITS
                </div>
            </div>
        </div>
    <?php } ?>