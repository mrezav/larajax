<!DOCTYPE html>
<html>
<head>
	<title>Export PDF</title>
	<style type="text/css">
		#kontak {
		    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		    border-collapse: collapse;
		    width: 100%;
		}

		#kontak td, #kontak th {
		    border: 1px solid #ddd;
		    padding: 8px;
		}

		#kontak tr:nth-child(even){background-color: #f2f2f2;}

		#kontak tr:hover {background-color: #ddd;}

		#kontak th {
		    padding-top: 12px;
		    padding-bottom: 12px;
		    text-align: left;
		    background-color: #4CAF50;
		    color: white;
		}
	</style>
</head>
<body>
<table id="kontak">
	<caption><h3>Daftar Kontak</h3></caption>
	<thead style="background-color: #173;">
		<tr>
			<th width="50px">No</th>
			<th width="250px">Name</th>
			<th width="300px">Email</th>
		</tr>
	</thead>
	<tbody>
		@foreach($contacts as $key => $contact)
			<tr>
				<td>{{ $key+1 }}</td>
				<td>{{ $contact['name'] }}</td>
				<td>{{ $contact['email'] }}</td>
			</tr>
		@endforeach
	</tbody>
</table>
</body>
</html>