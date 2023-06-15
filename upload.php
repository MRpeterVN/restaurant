<?php
	// Kế thừa layout chính
	include 'layout.php';
?>



<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="index.php">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Thêm món ăn</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm món ăn</h1>
        </div>
    </div>

    <form role="form">
        <div class="form-group">
            <label>Tên món ăn</label>
            <input class="form-control" placeholder="Tên món ăn">
        </div>
        <div class="form-group">
            <label>Mô tả</label>
            <input class="form-control" placeholder="Mô tả">
        </div>
        <div class="form-group">
            <label>Selects</label>
            <select class="form-control">
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
                <option>Option 4</option>
            </select>
        </div>
        <div class="form-group">
            <label>Ảnh</label>
            <input type="file" id="inputFile">
            <p class="help-block"> here.</p>
			<img id="previewImage"   style="display:none; max-width:200px; display:block; margin:auto;">
            <button id="cancelButton" style="display:none;">Hủy chọn ảnh</button>
        </div>

		<div class="form-group">
            <label>Giá tiền</label>
            <input class="form-control" placeholder="Giá Tiền">
        </div>

		<button type="submit" class="btn btn-md btn-success">Success</button>
</div>
     
</form>

</div>
<!--/.main-->


<script>
function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function() {
        var preview = document.getElementById('previewImage');
        preview.src = reader.result;
        preview.style.display = "block";
        document.getElementById('cancelButton').style.display = "block";
    };
    reader.readAsDataURL(event.target.files[0]);
}

function cancelImage() {
    document.getElementById('inputFile').value = "";
    document.getElementById('previewImage').src = "#";
    document.getElementById('previewImage').style.display = "none";
    document.getElementById('cancelButton').style.display = "none";
}

document.getElementById('inputFile').addEventListener('change', previewImage);
document.getElementById('cancelButton').addEventListener('click', cancelImage);
</script>