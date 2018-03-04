@extends('layout.admin')
@section('leave')
    <h1 class="page-header">Holiday </h1>
    <div class="row">
        <div class="col-lg-5">
            <form class="form-signin" action="" method="POST">
                <label>Send notice </label><br>
                Date: <input type="text" name="Email" class="form-control" placeholder="date you want to take leave on">
                Reason: <input type="text" name="Password" class="form-control" placeholder="Password"><br>
            </form>
        </div>
        <div class="col-lg-7">
            <table class="table table-striped">
                <thead>
                <th>S.N.</th>
                <th>English Date</th>
                <th>Nepali Date</th>
                <th>Day</th>
                <th>Holiday</th>
                </thead>
                <tbody>
                <tr>
                    <td>Kusum Gole</td>
                    <td>Quality Assurance</td>
                    <td>8am</td>
                    <td>5pm</td>
                    <td>Online</td>
                </tr>
                <tr>
                    <td>Kusum2</td>
                    <td>Developer</td>
                    <td>9am</td>
                    <td>7pm</td>
                    <td>Offline</td>
                </tr>
                <tr>
                    <td>Kusum2</td>
                    <td>Developer</td>
                    <td>9am</td>
                    <td>7pm</td>
                    <td>Offline</td>
                </tr><tr>
                    <td>Kusum2</td>
                    <td>Developer</td>
                    <td>9am</td>
                    <td>7pm</td>
                    <td>Offline</td>
                </tr><tr>
                    <td>Kusum2</td>
                    <td>Developer</td>
                    <td>9am</td>
                    <td>7pm</td>
                    <td>Offline</td>
                </tr><tr>
                    <td>Kusum2</td>
                    <td>Developer</td>
                    <td>9am</td>
                    <td>7pm</td>
                    <td>Offline</td>
                </tr><tr>
                    <td>Kusum2</td>
                    <td>Developer</td>
                    <td>9am</td>
                    <td>7pm</td>
                    <td>Offline</td>
                </tr><tr>
                    <td>Kusum2</td>
                    <td>Developer</td>
                    <td>9am</td>
                    <td>7pm</td>
                    <td>Offline</td>
                </tr><tr>
                    <td>Kusum2</td>
                    <td>Developer</td>
                    <td>9am</td>
                    <td>7pm</td>
                    <td>Offline</td>
                </tr><tr>
                    <td>Kusum2</td>
                    <td>Developer</td>
                    <td>9am</td>
                    <td>7pm</td>
                    <td>Offline</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop
