<html>
<head> Layout master
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body style="background-color:#f41;color:#fff">
<table>
    <td>
    @include('layout.sidebar')
    </td>
    <td>
    @yield('content')
    </td>

</table>
</body>
</html>