
<x-layout>
    <x-admin-table :name="'Posts Table'">
        <tr>
            <th>id</th>
            <th>username</th>
            <th>name</th>
            <th>email</th>
            <th>Posts</th>
            <th>actions</th>
        </tr>

        @foreach($users as $user)
            <tr>

                <td>{{$user->id}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td><a href="/admin/user{{$user->id}}/posts">Go to Posts</a></td>

                <td><a href="/admin/user/edit/{{$user->id}}">Edit</a> <a href="/admin/user/delete/{{$user->id}}">Delete</a></td>

            </tr>
        @endforeach
    </x-admin-table>
</x-layout>
