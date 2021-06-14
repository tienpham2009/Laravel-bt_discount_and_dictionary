<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>show_discount_amount</title>
</head>
<body>
<form method="POST" action="/show_discount_amount">
    @csrf
    <p> Product Description </p>
    <p>
        <input type="text" name="productDescription">
    </p>
    <p>List Price </p>
    <p>
        <input type="text" name="price">
    </p>
    <p>Discount Percent</p>
    <p>
        <input type="text" name="discountPercent">
    </p>
    <button type="submit">Calculate Discount</button>

</form>
<p> Discount Amount: </p>
<p>
        {{$discountAmount ?? ""}}
</p>
<p>Discount Price</p>
<p>
        {{$discountPrice ?? ""}}
</p>


</body>
</html>
