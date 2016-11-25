
@extends('layout.app')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Tables <small>Tabular Representation</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index">Dashboard</a>
                </li>
                <li>
                    <i class="fa fa-table"></i>  <a href="tables">Tables</a>
                </li>
                <li class="active">
                    <i class="fa fa-dashboard"></i> Orders
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-6">
            <h2>Table Orders</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Order By</th>
                            <th>Order Date&Time</th>
                            <th>Total Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($viewTableOrders as $orders)
                        <tr>
                            <td>{{ $orders ->id}}</td>
                            <td>{{ $orders ->user_id}}</td>
                            <td>{{ $orders ->created_at}}</td>
                            <td>{{ $orders ->total}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

      
        <div class="col-lg-6">
            <h2>CrossTab Quantity Orders of Products</h2>
            <div class="table-responsive">

                <?php
                    $data = DB::table('products')->join('order_details', 'products.id', '=', 'order_details.product_id');
                ?>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <?php  
                                foreach($data->select('order_details.created_at as dateBuy')->distinct()->get() as $head){
                                    $date_notime =date('d-M', strtotime($head->dateBuy));
                                    
                                    if($date_notime){
                                        echo '<th>'.$date_notime.'</th>';
                                    }else{
                                        echo '<th>pogi ako </th>';
                                    }
                                }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                      <?php  
                        foreach($data->select('title', 'quantity', 'order_details.created_at as dateBuy')->get() as $col){
                            echo '<tr>';
                            echo '<td>'.$col->title.'</td>';
                            
                            foreach($data->select('order_details.created_at as dateBuy')->distinct()->get() as $head){
                                if(strcmp($col->dateBuy, $head->dateBuy)==0) 
                                    echo '<td>'.$col->quantity.'</td>';
                                else echo '<td></td>';
                            }

                            echo '</tr>';
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <h2>CrossTab </h2>
        <div class="table responsive">
            
            <?php
                    $data = DB::table('products')->join('order_details', 'products.id', '=', 'order_details.product_id');
                ?>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <?php  
                                foreach($data->select('order_details.created_at as dateBuy')->distinct()->get() as $key => $head){
                                    $dates[$key] = date('d-M', strtotime($head->dateBuy));
                                    echo '<th>'.$dates[$key].'</th>';
                                }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                      <?php  
                        foreach($data->select('title', 'quantity', 'order_details.created_at as dateBuy')->get() as $col){
                            echo '<tr>';
                            echo '<td>'.$col->title.'</td>';
                            
                            foreach($data->select('order_details.created_at as dateBuy')->distinct()->get() as $head){
                                $date_notime =date('d-M', strtotime($col->dateBuy));
                               // dd(); 
                                if(strcmp($date_notime, $head->dateBuy)==0) 
                                    echo '<td>'.$col->quantity.'</td>';
                                else echo '<td></td>';
                            }

                            echo '</tr>';
                        }
                    ?>

        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-6">
            
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Page</th>
                            <th>Visits</th>
                            <th>% New Visits</th>
                            <th>Revenue</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>/index.html</td>
                            <td>1265</td>
                            <td>32.3%</td>
                            <td>$321.33</td>
                        </tr>
                        <tr>
                            <td>/about.html</td>
                            <td>261</td>
                            <td>33.3%</td>
                            <td>$234.12</td>
                        </tr>
                        <tr>
                            <td>/sales.html</td>
                            <td>665</td>
                            <td>21.3%</td>
                            <td>$16.34</td>
                        </tr>
                        <tr>
                            <td>/blog.html</td>
                            <td>9516</td>
                            <td>89.3%</td>
                            <td>$1644.43</td>
                        </tr>
                        <tr>
                            <td>/404.html</td>
                            <td>23</td>
                            <td>34.3%</td>
                            <td>$23.52</td>
                        </tr>
                        <tr>
                            <td>/services.html</td>
                            <td>421</td>
                            <td>60.3%</td>
                            <td>$724.32</td>
                        </tr>
                        <tr>
                            <td>/blog/post.html</td>
                            <td>1233</td>
                            <td>93.2%</td>
                            <td>$126.34</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
      
        </div>

    <!-- /.row -->
<div>
</div>
<!-- /.container-fluid -->
@stop