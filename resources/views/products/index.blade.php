<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
    <h1>Product List</h1>
    
    @if(count($products) > 0)
        <ul>
            @foreach ($products as $product)
                <li>{{ $product['name'] }} - ${{ $product['price'] }}</li>
            @endforeach
        </ul>
    @else
        <p>No products available.</p>
    @endif

</body>
</html>
