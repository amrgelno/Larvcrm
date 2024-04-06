  
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
                <h5 class="m-0">projects</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">
                  
<form action="{{ route('projects.store') }}"    method="post"   enctype="multipart/form-data" >

@csrf
@Method('POST')

<label for='title '>     title       </label>


<input class='input-lg'    name='title'    placeholder='title'    value='' >  <br/>


<label for=' Description'>     Description       </label>

<br/>

<textarea  name='Description'   class='input-lg' cols="100"  name='Description'   placeholder='Description'    value='' >  
  
</textarea > <br/>


<label for='Deadline'>     Deadline       </label>


<input class='input-lg'    name='Deadline' type='Date'    placeholder='Deadline '    value='' >    <br/>



<label for='Assigned user'>     Assigned user       </label> 

<select  name='Assigneduser'  class='input-lg'>

@if(auth::guard('user')->user()  )


<option value=''> select Assigned user      </option>  
<option value='{{auth::guard('user')->user()->username  }}'>  {{auth::guard('user')->user()->username  }}       </option>

@endif

</select>

<br>

<label for='Assignedprojects'>     Assigned projects       </label>  


<select  name='Assignedclient'  class='input-lg'>  

<option value=''> select Assigned client      </option>

@foreach($client  as $clientitem)

<option value='{{$clientitem->id}}'>  {{$clientitem->username }}       </option>

@endforeach

</select>

<br>


<label for='Assigned projects'>    status       </label>  

<input class='input-lg'    name='status' type='text'    placeholder='status '    value='' >    <br/>

<br>
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
<th scope="col">title </th>
<th scope="col">Description</th>
<th scope="col">Deadline</th>
<th scope="col">Assigned user</th>
<th scope="col">Assigned client</th>
<th scope="col">status</th>
<th scope="col">update</th>
<th scope="col">Delete </th>

</tr>

<tr>

@php   $i=0;   @endphp

@foreach($projects  as $projectsitem)


<!-- <td><?PHP echo $projectsitem->id;?></td> -->

   
    @csrf
@method('POST')
</FORM>

<td> {{++$i}}     </td>
       
<td> <form  action="{{route('projects.update',$projectsitem->id)}}"  method="post">
@csrf  
@method('PUT')
  <input type='text'  name='title' value='{{ $projectsitem -> title   }}' >  </td>

<td> <input type='text'  name='Description' value='{{ $projectsitem -> Description  }}' >  </td>

<td><input type='text'  name='Deadline' value='{{ $projectsitem -> Deadline  }}" ' ></td>


<td><input type='text'  name='Assigneduser' value='{{ $projectsitem -> Assigneduser  }}" ' >


</select>


</td>





<td>


<select  name='Assignedclient'  class='input-lg'>  

<option value=''> select Assigned client      </option>

@foreach($client  as $clientitem)

@if($clientitem->id==$projectsitem -> Assignedclient )

<option value='{{$clientitem->id}}'>  current :- {{$clientitem->username }}       </option>

@endif

@if($clientitem->id != $projectsitem -> Assignedclient )
<option value='{{$clientitem->id}}'>  {{$clientitem->username }}       </option>
@endif

@endforeach

</select>

</td>


<td> <input type='text'  name='status'  value='{{ $projectsitem -> status  }}' >

   
 <td>  
  
<input type="hidden"  name="projects_id"   value="{{ $projectsitem -> id  }}"/>
<input type="SUBMIT" name="updateprojects" VALUE="update"   class="btn btn-primary" style='background:yellow'>

  </form>

  </td>
  
   <td>
 <div align='center'>

<form action="{{route('projects.destroy',$projectsitem->id)}}" method="Post">

@csrf
@method('DELETE')

<input type="hidden"  name="projects_id"   value="{{ $projectsitem -> id  }}"/>

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


