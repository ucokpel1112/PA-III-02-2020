<table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
    <tbody>
    <tr>
        <td style="padding-top:10px;background-color:#e6e6e6" width="100%" valign="top" bgcolor="#E6E6E6">
            <table role="presentation" style="margin:0 auto;width:600px"
                   width="600" cellspacing="0" cellpadding="0" border="0" bgcolor="#E6E6E6" align="center">
                <tbody>
                <tr height="24">
                    <td></td>
                </tr>
                <tr>
                    <td align="center">
                        <a href="#">
                            <img
                                src="{{asset('img/logo.png')}}" width="150" border="0"></a>
                    </td>
                </tr>
                <tr height="24">
                    <td></td>
                </tr>
                </tbody>
            </table>
            <table style="margin:0 auto;width:600px" width="600" cellspacing="0" cellpadding="0" border="0"
                   bgcolor="#eeeeed" align="center">
                <tbody>
                <tr>
                    <td style="padding:0" valign="top" bgcolor="#ffffff">
                        <a href="#">
                            <img
                                src="{{asset('img/banner/video.png')}}" style="display:block;width:600px" width="600"
                                border="0">
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
            <table style="margin:0 auto;width:600px"
                   width="600" cellspacing="0" cellpadding="0" border="0" bgcolor="#FFFFFF" align="center">
                <tbody>
                <tr>
                    <td style="font-size:16px;line-height:20px;color:#000000;font-weight:bold;text-align:center;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;vertical-align:top;padding:15px 50px 10px 50px;margin:0">
                        Submit your most innovative smart home idea for a chance to win a share of $5,500 USD.
                    </td>
                </tr>
                </tbody>
            </table>
            @foreach($kabupaten as $row)
                @if($row->getPaketWisata->count()!=0)
                    <table style="margin:0 auto;width:600px"
                           width="600" cellspacing="0" cellpadding="0" border="0" bgcolor="#FFFFFF" align="center">
                        <tbody>
                        <tr>
                            <td style="font-size:22px;line-height:26px;color:#000000;font-weight:normal;text-align:left;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;vertical-align:top;padding:15px 30px 5px 30px;margin:0">
                                <u>Kabupaten {{$row->nama_kabupaten}}</u>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table style="margin:0 auto;width:600px"
                           width="600" cellspacing="0" cellpadding="0" border="0" bgcolor="#FFFFFF" align="center">
                        <tbody>
                        @foreach($row->getPaketWisata as $rows)
                            @if($rows->status==1)
                                <tr>
                                    <td style="font-size:18px;line-height:18px;color:#000000;font-weight:normal;text-align:left;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;vertical-align:top;padding:15px 60px 10px 60px;margin:0">
                                        {{$rows->nama_paket}} ({{$rows->harga_paket}}/orang)
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-size:14px;line-height:18px;color:#000000;font-weight:normal;text-align:left;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;vertical-align:top;padding:15px 70px 10px 70px;margin:0">
                                        <?php echo $rows->deskripsi_paket; ?>
                                    </td>
                                </tr>
                                @if($rows->getSesi->count()!=0)
                                    <tr>
                                        <td style="font-size:18px;line-height:18px;color:#000000;font-weight:normal;text-align:left;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;vertical-align:top;padding:15px 60px 10px 60px;margin:0">
                                            Sesi/jadwal kegiatan paket

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-size:12px;line-height:18px;color:#000000;font-weight:normal;text-align:left;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;vertical-align:top;padding:15px 70px 10px 70px;margin:0">
                                            <ul>
                                                @foreach($rows->getSesi as $sesi)
                                                    @if($sesi->status==1)
                                                        <li>{{$sesi->jadwal}}</li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </td>
                                    </tr>
                                @endif
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                @endif
            @endforeach
            <table style="margin:0 auto;width:600px"
                   width="600" cellspacing="0" cellpadding="0" border="0" bgcolor="#FFFFFF" align="center">
                <tbody>
                <tr>
                    <td style="font-size:22px;line-height:26px;color:#000000;font-weight:normal;text-align:left;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;vertical-align:top;padding:15px 30px 0px 30px;margin:0">

                    </td>
                </tr>
                </tbody>
            </table>

            <table role="presentation" style="margin:0 auto;width:600px"
                   width="600" cellspacing="0" cellpadding="0" border="0" bgcolor="#FFFFFF" align="center">
                <tbody>
                <tr>
                    <td style="font-size:14px;line-height:18px;color:#000000;font-weight:normal;text-align:left;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;vertical-align:top;padding:15px 60px 10px 60px;margin:0">
                        <strong>hubungi nomor 082160085708, jika ada pertanyaan/kritik/saran.</strong>
                    </td>
                </tr>
                </tbody>
            </table>
            <table role="presentation" style="margin:0 auto;width:600px"
                   width="600" cellspacing="0" cellpadding="0" border="0" bgcolor="#FFFFFF" align="center">
                <tbody>
                <tr>
                    <td style="vertical-align:top;padding:0px 20px 0px 20px;margin:0" valign="top" align="center">
                        <table width="160" cellspacing="0"
                               cellpadding="0" border="0" align="center">
                            <tbody>
                            <tr>
                                <td style="color:#ffffff;font-family:Arial,Helvetica,sans-serif;font-size:14px;line-height:16px;text-align:center"
                                    nowrap="" height="30" bgcolor="#009ddc" align="center">
                                    <a href="{{asset('/')}}"
                                       title="Visit Toba"
                                       style="color:#ffffff;font-family:Arial,Helvetica,sans-serif;font-size:14px;line-height:16px;display:block;text-decoration:none;text-transform:uppercase;font-style:normal;font-weight:bold;text-align:center;padding:7px 5px"
                                    >
                                        VISIT&nbsp;TOBA
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
            <table style="margin:0 auto;width:600px"
                   width="600" cellspacing="0" cellpadding="0" border="0" bgcolor="#E6E6E6" align="center">
                <tbody>
                <tr height="30"></tr>
                <tr height="19">
                    <td height="19" align="center">
            <span style="color:#74787d;font-size:12px;line-height:18px">
              <p>
                &nbsp;
                <span>
                  © Visit Toba
                  <br>
                  PA-III-02-2020
                </span>
                &nbsp;
              </p>
            </span>
                    </td>
                </tr>
                <tr style="height:16px">
                    <td style="height:16px" width="100%">&nbsp;</td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
