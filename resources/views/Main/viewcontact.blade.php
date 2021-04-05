@include('layouts.navbar')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.container{
    max-width:100px;
    display:table;
    margin-left:auto;
    margin-right:auto;

}



/* td{
    background-color:#b3b3b3;
    color:black;
    font-size:16px;
    text-align:center;
    min-width:50px;
    min-height:25px;
    border-bottom: 3px solid white;
    border-left: 3px solid white;
    padding:15px;
    
} */

/* th{
    background-color:black;
    color:white;
    font-size:20px;
    text-align:center !important;
    min-width:50px;
    min-height:35px;
    border: 3px solid white;
    border-bottom: 3px solid white;
    padding:15px;
} */
i.action-icon{
    color:black;
    
}

/* table{
    padding:15px;
    margin-top:15px;
    margin-left:auto;
    margin-right:auto;
    margin-bottom:15px;
} */

.pagination{
    justify-content: center !important;
    margin:25px;
}

.pagination a{
    background-color:black;
    color:white;
}

.page-item.active .page-link{
    background-color:#b3b3b3 !important;
    color:black !important;
    border-color:#b3b3b3 !important;
}

.page-link:hover{
    color:black !important;
}

h1{
    text-align:center;
    padding-top:30px;
    padding-bottom:20px;
    text-decoration:underline;
    text-decoration-style:double;
}

button{
    box-shadow:none;
    background:none;
    padding:5px 10px;
    height:100px;
    width:100px;
}

.findInput{
    border-radius:5px;
    border:none;
    background:none;
}

table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
  background:black;
    color:white;
}

.action{
 
    height:100px;
    width:100px;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
    
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }

  .action{
    
      width:80px;
    }

  
}

input.find{
  border:none;
  background:#c3d446;
  margin:5px;
  color:white;
  border-radius:5px;
  padding:5px;
  
  
}

input.find-more{
    border:none;
    background:#9e54bd;
    margin:5px;
    color:white;
    border-radius:5px;
    padding:5px; 
}

input.find:focus{
    border-radius:5px;
    box-shadow:0 0 5px 2px #c3d446;
    background:white;
    color:#c3d446;
    font-weight:bold;
    outline:none;
}

input.find-more:focus{
    border-radius:5px;
    box-shadow:0 0 5px 2px #9e54bd;
    background:white;
    color:#9e54bd;
    font-weight:bold;
    outline:none;
}

.action1 {
  background-color:#ebab34; 
  color: white; 
  border: 2px solid #ebab34;
  border-radius:25px 0 0 25px;
  width: 120px;
}

.action1 > i {
  
  color: white; 
  
}

.action1:hover {
  background-color: white;
  color:#ebab34;
}

.action1:hover > i {
  color:  #ebab34;
}

.action2 {
  background-color: #555555; 
  color: white; 
  border: 2px solid #555555;
  width: 115px;
}

.action2 > i {
  
  color: white; 
  
}

.action2:hover {
  background-color: white;
  color: #555555;
  border-left:none;
}

.action2:hover > i {
  color: #555555;
}

.action3 {
  background-color: #f44336; 
  color: white; 
  border: 2px solid #f44336;
  width: 115px;
}

.action3 > i {
  
  color: white; 
  
}

.action3:hover {
  background-color: white;
  color: #f44336;
  border-left:none;
}

.action3:hover > i {
  color: #f44336;
}

.action4 {
  background-color:#008cba; 
  color: white; 
  border: 2px solid #008cba;
  border-radius:0 25px 25px 0;
  border-left:none;
  z-index: !important;
}

.action4 > a > i {
  
  color: white; 
  
}

.action4:hover {
  background-color: white;
  color: #008cba;
}

.action4:hover>a > i {
  color: #008cba;
}

.action5 {
  background-color:#4CAF50; 
  color: white; 
  border: 2px solid #4CAF50;
  border-radius:25px 0 0 25px;
  width: 120px;
}

.action5 > a > i {
  
  color: white; 
  
}

.action5:hover {
  background-color: white;
  color:#4CAF50;
}

.action5:hover > a > i {
  color:  #4CAF50;
}

.action6 {
  background-color: #c3d446; 
  color: white; 
  border: 2px solid #c3d446;
  width: 115px;
}

.action6 > i {
  
  color: white; 
  
}

.action6:hover {
  background-color: white;
  color: #c3d446;
  border-left:none;
}

.action6:hover > i {
  color: #c3d446;
}

.action7 {
  background-color: #9e54bd; 
  color: white; 
  border: 2px solid #9e54bd;
  width: 115px;
}

.action7 > i {
  
  color: white; 
  
}

.action7:hover {
  background-color: white;
  color: #9e54bd;
  border-left:none;
}

.action7:hover > i {
  color: #9e54bd;
}

</style>
<div class="container">
<h1>Contact Info</h1>

<table>
    <tr>
    <thead>
        <th scope="col" style="border-left:none;">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Contact No.</th>
        <th scope="col">Message</th>
        <th scope="col">Created At</th>
        <th scope="col">Updated At</th>
        <th colspan="4">Action</th>
          
    </tr>
    </thead> 
    <tbody>
    @foreach($contactUs as $cu)
    <tr>
        <td scope="row" data-label="Id" style="border-left:none;">{{$cu->id}}</td>
        <td data-label="Name">{{$cu->Name}}</td>
        <td data-label="Contact No.">{{$cu->Contact}}</td>
        <td data-label="Message">{{$cu->Message}}</td>
        <td data-label="Created At">{{$cu->created_at}}</td>
        <td data-label="Updated At">{{$cu->updated_at}}</td>

        <td data-label="Action">
        <form  method="POST" action="{{route('editcontact', $cu->id)}}" id="edit-form-{{$cu->id}}" style="display:none;" > 
                {{ csrf_field() }}
                {{ method_field('get') }}

            </form>
            <button class="action1" onclick="if(confirm('Are you sure ?'))
            {
                event.preventDefault();
                document.getElementById('edit-form-{{$cu->id}}').submit();
            }else
            {
                event.preventDefault();
            }
            
            ">
        <i class="fa fa-edit fa-2x action-icon" ></i>
        <div>Edit</div>
        </button>
        </td>

        <td data-label="Action"> 
            <form  method="POST" action="{{route('deletecontact', $cu->id)}}" id="delete-form-{{$cu->id}}" style="display:none;" > 
                {{ csrf_field() }}
                {{ method_field('delete') }}

            </form>
            <button class="action2" onclick="if(confirm('Are you sure ?'))
            {
                event.preventDefault();
                document.getElementById('delete-form-{{$cu->id}}').submit();
            }else
            {
                event.preventDefault();
            }
            
            ">
            <i class="fa fa-trash fa-2x action-icon"></i>
            <div>Delete</div>
            </button>
            
        </td>

        <td data-label="Action">
        <form  method="POST" action="{{route('forcedeletecontact', $cu->id)}}" id="forcedelete-form-{{$cu->id}}" style="display:none;" > 
                {{ csrf_field() }}
                {{ method_field('delete') }}

        </form>
        <button class="action3" onclick="if(confirm('Are you sure want to permanently delete your data ?'))
            {
                event.preventDefault();
                document.getElementById('forcedelete-form-{{$cu->id}}').submit();
            }else
            {
                event.preventDefault();
            }
            
            ">
        <i class="fa fa-minus-square fa-2x action-icon"></i>
        <div>ForceDelete</div>
        </button>
        </td>

            <td data-label="Action">
            <button class="action4"><a href="insertcontact">
            <i class="fa fa-plus fa-2x action-icon"></i>
            </a>
            <div>Insert</div>
            
            </button>
            </td>
    </tr>
    
    @endforeach
           
           <td colspan="3"></td>
            
            <td>
            <button class="action5" onclick="confirm('Are you sure want to restore your data ?')">
            <a href="restore"><i class="fa fa-undo fa-2x action-icon"></i></a>
            <div>Restore</div>
            </button>
            <input class="find" type="search" size="3" style="background:none" >
            </td>

            <td>
            <form method="GET"  action="{{route('findcontact')}}">
            <button class="action6" type="submit">

            <i class="fa fa-search fa-2x action-icon"></i>
            <div>Find</div>
              
            </button>
            <input class="find" type="search" size="7" name="id" placeholder="Find">
            </form>
            </td>

            <td>
            <form method="GET"  action="{{route('findmorecontact')}}">
            <button class="action7" type="submit">
            
            <i class="fa fa-search fa-2x action-icon"></i>
            <div>Find More</div>
            </button>
            <input class="find-more" type="search" size="7" name="id" placeholder="Find More" >  
            
            </form>
            </td>

            <td>
            <button class="action4" ><a href="insertcontact">
            <i class="fa fa-plus fa-2x action-icon"></i>
            </a>
            <div>Insert</div>
            </button>
            <input class="find" type="search" size="3" style="background:none" >
            </td>
            <td colspan="3"></td>
            </tbody>
            
</table>
</div>

   

        {{$contactUs->links("pagination::bootstrap-4")}}

@include('layouts.footer')
