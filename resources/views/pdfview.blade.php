<style type="text/css">
    table td, table th {
        border: 1px solid black;
    }
</style>
<div class="container">
    <table>
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
        </tr>
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
        </tr>
    </table>
</div>
