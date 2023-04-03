 <table border="1" cellspacing="0" cellpadding="0" width="440" style="width:330pt;background:#EEEEEE;border:solid #CCCCCC 1pt;">

    <tbody>

        <tr>

            <td style="border:none;padding:2.25pt 2.25pt 2.25pt 2.25pt;background-color: #000;">

                <p align="center" style="text-align:center;">

                    <span style="font-family:Arial,sans-serif;"><img src="{{ url('front/images/logo.png') }}"></span>

                </p>

            </td>

        </tr>

        <tr>

            <td style="border:none;background:#ff9800;padding:7.5pt 7.5pt 7.5pt 7.5pt;">

                <h1 align="center" style="margin:0cm;margin-bottom:0.0001pt;text-align:center;">

          <span style="font-size:11pt;font-family:Arial,sans-serif;color:white;">

         Du hast eine Bestellung!</span>

        </h1>

            </td>

        </tr>

        <tr>

            <td style="border:none;padding:2.25pt 2.25pt 2.25pt 2.25pt;">

                <table border="1" cellspacing="0" cellpadding="0" width="100%" style="width:100%;border-collapse:collapse;border:none;">

                    <tbody>
                             <tr>

                            <td width="100" style="width:75pt;padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <strong><span style="font-size:10pt;font-family:Arial,sans-serif;color:#4E4E4E;">

                  Service:</span></strong>

                                </p>

                            </td>

                            <td style="background:white;padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <span style="font-size:10pt;">{{ $service  }} </span>

                                </p>

                            </td>

                        </tr>
                               <tr>

                            <td width="100" style="width:75pt;padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <strong><span style="font-size:10pt;font-family:Arial,sans-serif;color:#4E4E4E;">

                  Zahlungsart :</span></strong>

                                </p>

                            </td>

                            <td style="background:white;padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <span style="font-size:10pt;"> {{ $payment  }} </span>

                                </p>

                            </td>

                        </tr>

                          <tr>

                            <td width="100" style="width:75pt;padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <strong><span style="font-size:10pt;font-family:Arial,sans-serif;color:#4E4E4E;">

                  Fahrzeuge :</span></strong>

                                </p>

                            </td>

                            <td style="background:white;padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <span style="font-size:10pt;"> {{ $vechile  }} </span>

                                </p>

                            </td>

                        </tr>


                              <tr>

                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <strong>

                                    <span style="font-size:10pt;font-family:Arial,sans-serif;color:#4E4E4E;">

                                            Abholdatum :

                                    </span>

                                    </strong>

                                </p>

                            </td>

                            <td style="background:white;padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <span style="font-size:10pt;">{{ $pickupdate  }}</span>

                                </p>

                            </td>

                        </tr>

                          <tr>

                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <strong>

                                    <span style="font-size:10pt;font-family:Arial,sans-serif;color:#4E4E4E;">

                                            Abholzeit :

                                    </span>

                                    </strong>

                                </p>

                            </td>

                            <td style="background:white;padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <span style="font-size:10pt;">{{ $pickuphour  }}:{{ $pickupminute  }}</span>

                                </p>

                            </td>

                        </tr>

                          <tr>

                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <strong>

                                    <span style="font-size:10pt;font-family:Arial,sans-serif;color:#4E4E4E;">

                                            Abholadresse :

                                    </span>

                                    </strong>

                                </p>

                            </td>

                            <td style="background:white;padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <span style="font-size:10pt;">{{ $pickupaddress  }}</span>

                                </p>

                            </td>

                        </tr>

                             <tr>

                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <strong>

                                    <span style="font-size:10pt;font-family:Arial,sans-serif;color:#4E4E4E;">

                                            Postleitzahl :

                                    </span>

                                    </strong>

                                </p>

                            </td>

                            <td style="background:white;padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <span style="font-size:10pt;">{{ $zipcode  }}</span>

                                </p>

                            </td>

                        </tr>

                               <tr>

                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <strong>

                                    <span style="font-size:10pt;font-family:Arial,sans-serif;color:#4E4E4E;">

                                            Stadt :

                                    </span>

                                    </strong>

                                </p>

                            </td>

                            <td style="background:white;padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <span style="font-size:10pt;">{{ $stadt  }}</span>

                                </p>

                            </td>

                        </tr>

                          <tr>

                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <strong>

                                    <span style="font-size:10pt;font-family:Arial,sans-serif;color:#4E4E4E;">

                                            Zieladresse :

                                    </span>

                                    </strong>

                                </p>

                            </td>

                            <td style="background:white;padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <span style="font-size:10pt;">{{ $dropoffaddress  }}</span>

                                </p>

                            </td>

                        </tr>


                             <tr>

                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <strong>

                                    <span style="font-size:10pt;font-family:Arial,sans-serif;color:#4E4E4E;">

                                            Postleitzahl :

                                    </span>

                                    </strong>

                                </p>

                            </td>

                            <td style="background:white;padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <span style="font-size:10pt;">{{ $zipcode2  }}</span>

                                </p>

                            </td>

                        </tr>

                               <tr>

                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <strong>

                                    <span style="font-size:10pt;font-family:Arial,sans-serif;color:#4E4E4E;">

                                            Stadt :

                                    </span>

                                    </strong>

                                </p>

                            </td>

                            <td style="background:white;padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <span style="font-size:10pt;">{{ $stadt2  }}</span>

                                </p>

                            </td>

                        </tr>

                        <tr>

                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <strong>

                                    <span style="font-size:10pt;font-family:Arial,sans-serif;color:#4E4E4E;">

                  							Name und Nachname:

                  					</span>

                  					</strong>

                                </p>

                            </td>

                            <td style="background:white;padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <span style="font-size:10pt;">{{ $name  }} {{ $surname  }}</span>

                                </p>

                            </td>

                        </tr>
                         
                          <tr>

                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <strong>

                                    <span style="font-size:10pt;font-family:Arial,sans-serif;color:#4E4E4E;">

                                            Flugnummer:

                                    </span>

                                    </strong>

                                </p>

                            </td>

                            <td style="background:white;padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <span style="font-size:10pt;">{{ $flightnumber  }}</span>

                                </p>

                            </td>

                        </tr>

                              <tr>

                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <strong>

                                    <span style="font-size:10pt;font-family:Arial,sans-serif;color:#4E4E4E;">

                                            Abflugsort:

                                    </span>

                                    </strong>

                                </p>

                            </td>

                            <td style="background:white;padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <span style="font-size:10pt;">{{ $fromcity  }}</span>

                                </p>

                            </td>

                        </tr>

                        <tr>

                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <strong>

                                    <span style="font-size:10pt;font-family:Arial,sans-serif;color:#4E4E4E;">

                  						E-Mail:

				                    </span>

				                   </strong>

				                </p>

                            </td>

                            <td style="background:white;padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <span style="font-size:10pt;">

                                   		 <a href="mailto:mail@mail.com" class="ns-action">{{ $email  }}</a>

                 					</span>

                                </p>

                            </td>

                        </tr>

                        <tr>

                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <strong><span style="font-size:10pt;font-family:Arial,sans-serif;color:#4E4E4E;">

                 				 Telefon:</span></strong>

                                </p>

                            </td>

                            <td style="background:white;padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <span style="font-size:10pt;"><span class="wmi-callto">{{ $phone  }} </span></span>

                                </p>

                            </td>

                        </tr>

                        <tr>

                            <td style="padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <strong><span style="font-size:10pt;font-family:Arial,sans-serif;color:#4E4E4E;">

                  Passagiere :</span></strong>

                                </p>

                            </td>

                            <td style="background:white;padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <span style="font-size:10pt;">{{ $passengers  }}</span>

                                </p>

                            </td>

                        </tr>

                        <tr>

                            <td width="100" style="width:75pt;padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <strong><span style="font-size:10pt;font-family:Arial,sans-serif;color:#4E4E4E;">

                  Gepäck:</span></strong>

                                </p>

                            </td>

                            <td style="background:white;padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <span style="font-size:10pt;"> {{ $bags  }}</span>

                                </p>

                            </td>

                        </tr>

                     


                          <tr>

                            <td width="100" style="width:75pt;padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <strong><span style="font-size:10pt;font-family:Arial,sans-serif;color:#4E4E4E;">

                  Nachrichten :</span></strong>

                                </p>

                            </td>

                            <td style="background:white;padding:3.75pt 3.75pt 3.75pt 3.75pt;">

                                <p>

                                    <span style="font-size:10pt;"> {{ $text  }} </span>

                                </p>

                            </td>

                        </tr>

                     

                       

                    </tbody>

                </table>

            </td>

        </tr>

   

    </tbody>

</table>