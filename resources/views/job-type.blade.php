@extends('adminlte::page')

@section('title', 'تعريف الوظائف')

@section('content_header')
    <h1 style="font-weight:bold; text-align:right;"> تعريف الوظائف</h1>
@stop

@section('content')
    <div class="row">
        <!-- ✅ قسم إضافة مجموعة -->
        <div class="col-md-12 mb-4">
            @if ($jobEdit->title === '')
                <div class="card shadow-lg p-4 border-0 animate__animated animate__fadeIn"
                    style="border-radius: 15px; background-color: #f8f9fa;">
                    <h4 class="mb-3 text-dark font-weight-bold">إضافة وظيفة</h4>
                    <form action="{{ route('job-type.create') }}" method="POST">
                        @csrf
                        <div class="row">
                            <label class="font-weight-bold" style="color: #343a40;"> اسم الوظيفة </label>
                            <div class="col-md-12 input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="border-color: #343a40;"><i class="fas fa-user-tie"
                                            style="color:#343a40;"></i></span>
                                </div>
                                <input type="text" class="form-control" style="border-color: #343a40;" name="title"
                                    placeholder="أدخل اسم الوظيفة" required>
                            </div>
                        </div>

                        <!-- زر بعرض كامل -->
                        <button type="submit" class="btn mt-3 px-4 shadow-sm w-100"
                            style="background-color: #28a745; color: white;">
                            إضافة وظيفة جديدة
                        </button>
                    </form>
                </div>
            @else
                <div class="card shadow-lg p-4 border-0 animate__animated animate__fadeIn"
                    style="border-radius: 15px; background-color: #f8f9fa;">
                    <h4 class="mb-3 text-dark font-weight-bold">تعديل وظيفة '{{ $jobEdit->title }}'</h4>
                    <form action="{{ route('job-type.edit', $jobEdit->id) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label class="font-weight-bold"> اسم الوظيفة </label>
                                <div class="col-md-12 input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-tie"
                                                style="color:#7c6232;"></i></span>
                                    </div>

                                    <input type="text" class="form-control" name="title" value="{{ $jobEdit->title }}"
                                        placeholder="أدخل اسم الوظيفة" required>
                                </div>


                            </div>
                        </div>
                        <!-- زر بعرض كامل -->
                        <button type="submit" class="btn mt-3 px-4 shadow-sm w-100 bg-success text-white">
                            تعديل الوظيفة
                        </button>
                    </form>
                </div>
            @endif
        </div>

        @if (Session::has('success'))
            <script>
                Swal.fire({
                    title: "{{ Session::get('success') }}",
                    icon: "success",
                    confirmButtonText: "تم",
                    draggable: true
                });
            </script>
        @endif

        @if (Session::has('edit_success'))
            <script>
                Swal.fire({
                    title: "تم تعديل '{{ Session::get('edit_success') }}' بنجاح",
                    icon: "success",
                    confirmButtonText: "تم",
                    draggable: true
                });
            </script>
        @endif

        <!-- ✅ قسم البحث والعرض -->
        <div class="col-md-12">
            <div class="card shadow-lg p-4 border-0 animate__animated animate__fadeIn"
                style="border-radius: 15px; background-color: #ccc;">
                <h4 class="mb-3" style="color: #343a40; font-weight: bold;">
                    قائمة الوظائف <span class="text-success">({{ $jobs->count() }})</span>
                </h4>

                <!-- 🔎 مربع البحث والفلترة -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <select id="filterType" class="form-control" onchange="searchTable()">
                            <option value="all"> البحث في جميع الحقول</option>
                            <option value="id"> كود الوظيفة</option>
                            <option value="name"> اسم الوظيفة</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="searchInput" class="form-control" placeholder=" أدخل كلمة البحث..."
                            onkeyup="searchTable()">
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover text-center animate__animated animate__fadeInUp" id="delegatesTable">
                        <thead style="background-color: #343a40; color: white;">
                            <tr>
                                <th>كود الوظيفة</th>
                                <th>اسم الوظيفة</th>
                                <th>عدد العملاء</th>
                                <th>الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jobs as $job)
                                <tr class="table-light">
                                    <td>#{{ $job->id }}</td>
                                    <td>{{ $job->title }}</td>
                                    <td>
                                        {{ $job->customers->count() }} عميل
                                    </td>
                                    <td class="d-flex justify-content-center align-items-center gap-1">
                                        <a href="{{ route('job-type.index', $job->id) }}"
                                            class="btn btn-sm btn-outline-success shadow-sm" title="تعديل">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <style>
        /* ✅ تحسين إدخال البيانات */
        .form-control {
            border-radius: 10px;
            padding: 12px;
            height: 50px;
            border: 1px solid #ced4da;
            transition: all 0.3s ease-in-out;
        }

        .form-control:focus {
            border-color: #997a44;
            /* box-shadow: 0 0 8px rgba(153, 122, 68, 0.3); */
        }

        /* ✅ تحسين الجدول */
        .table-hover tbody tr:hover {
            background-color: #f1ede5;
            transition: 0.3s ease-in-out;
        }

        /* ✅ تحسين الأزرار */
        .btn {
            transition: all 0.3s ease-in-out;
            font-weight: bold;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        /* ✅ تحسين تقسيم الأقسام */
        .card {
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
@stop

@section('js')
    <script>
        // ✅ كود البحث داخل الجدول
        function searchTable() {
            let input = document.getElementById("searchInput").value.toLowerCase();
            let table = document.getElementById("delegatesTable");
            let rows = table.getElementsByTagName("tr");

            for (let i = 1; i < rows.length; i++) {
                let rowData = rows[i].getElementsByTagName("td");
                let found = false;
                for (let j = 0; j < rowData.length - 1; j++) {
                    if (rowData[j].textContent.toLowerCase().includes(input)) {
                        found = true;
                        break;
                    }
                }
                rows[i].style.display = found ? "" : "none";
            }
        }

        function confirmDelete(event) {
            event.preventDefault(); // Prevent form submission
            Swal.fire({
                title: "هل أنت متأكد من الحذف؟",
                text: "سيتم حذف البيانات بالكامل ، هل أنت متأكد ؟",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "حذف",
                cancelButtonText: "الغاء",
            }).then((result) => {
                if (result.isConfirmed) {
                    event.target.submit(); // Submit the form if confirmed
                    Swal.fire({
                        title: "تم الحذف",
                        text: "تم الحذف بنجاح!",
                        confirmButtonText: "تم",
                        icon: "success"
                    });
                }
            });
        }
    </script>
@stop
