@extends('admin.index')
@section('tieudetrang')
Danh sách học kỳ
@endsection
@section('noidung')
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h3 class="m-0 font-weight-bold text-primary text-center">Danh sách học kỳ</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr style="background-color: rgb(247, 250, 67)">
                                    <th class="text-center text-primary">STT</th>
                                    <th class="text-center text-primary">Mã học kỳ</th>
                                    <th class="text-center text-primary">Tên học kỳ</th>
                                    <th class="text-center text-primary">Thời gian bắt đầu</th>
                                    <th class="text-center text-primary">Thời gian kết thúc</th>
                                    <th class="text-center text-primary">Sửa</th>
                                    <th class="text-center text-primary">Xóa</th>
                                  </tr>

                            </thead>
                            <tfoot>
                                <tr style="background-color: rgb(247, 250, 67)">
                                    <th class="text-center text-primary">STT</th>
                                    <th class="text-center text-primary">Mã học kỳ</th>
                                    <th class="text-center text-primary">Tên học kỳ</th>
                                    <th class="text-center text-primary">Thời gian bắt đầu</th>
                                    <th class="text-center text-primary">Thời gian kết thúc</th>
                                    <th class="text-center text-primary">Sửa</th>
                                    <th class="text-center text-primary">Xóa</th>
                                  </tr>

                            </tfoot>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td class="text-center ">11/11/2022 11:22</td>
                                    <td class="text-center ">12/11/2022 23:59</td>
                                    <td class="text-center text-primary"><a href="admin/hocky/sua"><i class="fas fa-edit"></i></a></td>
                                    <td class="text-center text-primary"><a href=""><i class="fa fa-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td class="text-center ">11/11/2022 11:22</td>
                                    <td class="text-center ">12/11/2022 23:59</td>
                                    <td class="text-center text-primary"><a href="admin/hocky/sua"><i class="fas fa-edit"></i></a></td>
                                    <td class="text-center text-primary"><a href=""><i class="fa fa-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td class="text-center ">11/11/2022 11:22</td>
                                    <td class="text-center ">12/11/2022 23:59</td>
                                    <td class="text-center text-primary"><a href="admin/hocky/sua"><i class="fas fa-edit"></i></a></td>
                                    <td class="text-center text-primary"><a href=""><i class="fa fa-trash"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="admin/hocky/them" type="submit" class="btn btn-primary">Thêm học kỳ</a>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2020</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
</div>
<!-- /.container-fluid -->
</div>
@endsection








