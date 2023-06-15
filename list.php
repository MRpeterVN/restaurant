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
            <li class="active">Quản lý món ăn</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý món ăn</h1>
        </div>
    </div>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>Tên món ăn</th>
                    <th>Ảnh</th>
                    <th>Miêu tả</th>
                    <th>Giá tiền</th>
                    <th>
                        <a href="upload.php">
                            <button type="button" class="btn btn-sm btn-success" data-toggle="tooltip"
                                data-placement="top" title="Thêm món ăn">Thêm</button>
                        </a>
                    </th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td><img src="https://via.placeholder.com/100"></td>
                    <td>mhon</td>
                    <td>150000vnd</td>
                    <td>
                        <i class="fa fa-trash" aria-hidden="true"></i>
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

</div>
<!--/.main-->


<style>
table {
    border-collapse: collapse;
    width: 100%;
    max-width: 800px;
    margin: auto;
    font-size: 16px;
    line-height: 1.5;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

th,
td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
    font-weight: bold;
    color: #333;
}

tr:hover {
    background-color: #f5f5f5;
}

img {
    max-width: 100%;
    height: auto;
}
</style>

<script>
$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
});
</script>