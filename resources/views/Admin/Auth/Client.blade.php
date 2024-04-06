  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">DashBoard-Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Client</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Fill the client form below </h6>

                <p class="card-text">
                      
<form action="{{ route('client.store') }}"    method="post"   enctype="multipart/form-data">

@csrf
@Method('Post')



<!-- auth username & password -->

@if(auth::guard('user')->user()  )


<input class='input-lg'  type='hidden'   name="email"    placeholder='username'    value="{{auth::guard('user')->user()->email }}" >  



<input class='input-lg'   type='hidden'   name="password"    placeholder='password'    value="{{auth::guard('user')->user()->password }}" > 

@endif

<!-- end auth username & password -->

<label for='username'>    Yname       </label>  


<input class='input-sm'   name='CLientname'    placeholder='username'    value='' >  <br/>


<label for=' email'>     email       </label>


<input class='input-sm' type='text'  name='CLientemail'    placeholder='email'    value='' > <br/>

<label for=' email'>     Mobile      </label>    


<input class='input-sm' type='text'  name='CLientphone'    placeholder='phone'    value='' > <br/>


<label for='image'>     image       </label>   


<input class='input-sm'   type='file'  name='upload'   placeholder='uploadimage'  required   >  <br/>



<input type='submit'   class="btn btn-primary"  >


</form>

    </ul>

              
             </p>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

              
    <table  border="1"  class="table table-responsive ">
   
   <tr class="trc" align='center'>
<th scope="col"><span align='center'> # </span></th>
<th scope="col">username</th>
<th scope="col">email</th>
<th scope="col">CLientphone</th>
<th scope="col">Image</th>
<th scope="col">edit</th>
<th scope="col">Delete </th>


</tr>

<tr>

@php   $i=0;   @endphp

@foreach($client  as $clientitem)


<!-- <td><?PHP echo $clientitem->id;?></td> -->

   
    @csrf
@method('POST')
</FORM>

<td> {{++$i}}     </td>
       
<td> <form  action="{{route('client.update',$clientitem->id)}}"  method="post"  enctype="multipart/form-data">
@csrf  
  @method('PUT')
  
  <input type='text'  name='CLientname' value='{{ $clientitem -> username  }}' >  </td>

<td> <input type='text'  name='CLientemail' value='{{ $clientitem -> email  }}' >  </td>

<td> <input type='text'  name='CLientphone' value='{{ $clientitem -> phone  }}' >  </td>

<td><img src="../Front/IMG/{{ $clientitem -> image  }}" 
style="width:50px; height:50px;"/> 

<input type='file'   name='upload'   >

</td>
   
 <td>

<!-- <input type="hidden"  name="client_id"   value="{{ $clientitem -> id  }}"/> -->

<input type="SUBMIT" name="updateClient" VALUE="update"   class="btn btn-primary" style='background:yellow'>

  </form>

  </td>
  
   <td>
 <div align='center'> 
<form action="{{route('client.destroy',$clientitem->id)}}" method="Post">
@csrf
@method('DELETE')

<!-- <input type="hidden"  name="client_id"   value="{{ $clientitem -> id  }}"/> -->

<input type="SUBMIT" name="DELETE" VALUE="x"   class="btn btn-primary" style='background:red'>
  </form></div>
  </td>
</tr>
      @endforeach
</table>

              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  </div>

