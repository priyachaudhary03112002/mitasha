@extends('frontend.layout.main')

@section('main_section')
        <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
            <div class="amado-pro-catagory clearfix">
               @foreach($data as $d)

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="shop.html">
                        <img src="{{url('backend/assets/img/upload/'.$d->img)}}" alt="">
                        <?php
                        $multi_img=$d->multi_img;
                        $multi_imgarr=explode(',',$multi_img);
                        ?>
                        @foreach($multi_imgarr as $multi_img)
                <img src="{{url('backend/assets/img/upload/product/'.$multi_img)}}" width="50px">
                 @endforeach
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p></p>
                            <h4>{{$d->name}}</h4>
                        </div>

                    </a>
                </div>
                @endforeach
                <!-- Single Catagory -->
</div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    
</body>

</html>
@endsection