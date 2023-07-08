<x-layout>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    <table>
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Action</td>
        </tr>
        @forelse ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>
                    <a href="{{route('user.create-pdf',['user'=>$user->id])}}">Get PDF</a>
                </td>
            </tr>
        @empty
            <p>No users</p>
        @endforelse
    </table>
</x-layout>
