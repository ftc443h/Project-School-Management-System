<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pernilaian studen</title>

    <style>

        table {
            margin-top: 20px;
        }

        th {
            font-size: 12px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: 400;
            text-align: center;
            text-transform: uppercase;
            color: #2D4263;
        }

        td {
            font-size: 12px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: 400;
            text-align: center;
            color: #2D4263;
        }

        .H3JUDUL {
            font-size: 15px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: bold;
            text-align: center;
            text-transform: uppercase;
            color: #2D4263;
        }

        .batasanaax {
            text-align: center;
            width: 200px;
            background-color: #2D4263;
        }
    </style>
</head>

<body>

    <h3 class="H3JUDUL">Student Assessment Preschool</h3>
    <hr class="batasanaax">

    <table border="1" align="center" cellpadding="10" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Student</th>
                <th class="text-center">Lesson</th>
                <th class="text-center">Assignment</th>
                <th class="text-center">UTS</th>
                <th class="text-center">UAS</th>
                <th class="text-center">Final Score</th>
                <th class="text-center">Grade</th>
                <th class="text-center">Predikat</th>
                <th class="text-center">Status</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach($lessonP as $lessoV)
            <tr>
                <td class="text-center">{{ $no }}</td>
                <td class="text-center">{{ $lessoV->student }}</td>
                <td class="text-center">{{ $lessoV->learning }}</td>
                <td class="text-center">{{ $lessoV->dailytasks_grade }}</td>
                <td class="text-center">{{ $lessoV->uts_grade }}</td>
                <td class="text-center">{{ $lessoV->uas_grade }}</td>
                <td class="text-center">{{ $lessoV->average_grade }}</td>
                <td class="text-center">{{ $lessoV->grade }}</td>
                <td class="text-center">{{ $lessoV->predikat }}</td>
                <td class="text-center">

                    @php
                    $status_ketvalue = $lessoV->ketnilai;
                    $btn_color = '';

                    switch ($status_ketvalue){
                    case 'Graduate';
                    $btn_color = 'btn-success';
                    break;
                    case 'Not Pass':
                    $btn_color = 'btn-danger';
                    break;
                    default:
                    $status_ketvalue = '';
                    }
                    @endphp

                    <label class="btn btn-sm {{ $btn_color }}">{{ $lessoV->ketnilai }}</label>
                </td>
            </tr>
            @php $no++; @endphp
            @endforeach
        </tbody>
    </table>

</body>

</html>