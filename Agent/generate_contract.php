<div id ="container">
<!--This is the generic Contract that will bill generated from the Agent view-->
<p>
    AGREEMENT made this <?php echo $Offer['offerAcceptanceDate']; ?> between <u><?php echo get_artistName($Offer['Artist_ID'])?></u> - <u><?php echo get_agentName($Offer['Agent_ID']); ?></u>
(hereinafter referred as "<b>PRODUCER</b>), and <u><?php echo get_promoterName($Offer['Promoter_ID']); ?></u> (hereinafter known as the "<b>PURCHASER</b>").
It is mutually agreed upon between the parties as follows: The <b>PURCHASER</b> hereby engages the <b>PRODUCER</b> and the <b>PRODUCER</b> hereby agrees to furnish the entertainment presentation hereinafter described,
upon all terms and conditions herein set foth, including those attached hereto entitled "<b>Additional Terms and Conditions</b>".  
    
</p>
<p>
    <ol>
        <li>
            Name and Address of Place of Engagement: <u><b><?php echo $Offer['Venue_ID']?></b></u>
        </li>
        <li>
            Date(s), Showtime: <u><b><?php echo $Offer['offerDate']?> @ <?php echo $Offer['offerSetTime'] ?></b></u>
        </li>
        <li>
            Additional Information:
            <li>
                <b>Billing:</b>
            </li>
            <li>
                <b>Performance Length:</b>  <u><b><?php echo $Offer['offerSetLength']?></b></u>
            </li>
            <li>
                <b>Sound and Lights:</b>
            </li>
            <li>
                <b>Additional Provisions:</b>
            </li>
            <li>
                <b>Merchandise:</b>  <u><b><?php echo $Offer['offerMerchandise1']?> / <?php echo $Offer['offerMerchandise2']?></b></u>
            </li>
            <li>
                <b>Who Sells:</b>
            </li>  
        </li>
        <li>
            <b>COMPENSATION AGREED UPON (Amount and Terms):</b>  <u><b><?php echo $Offer['offerGuarantee']?></b></u>
                <p>
                    <table border ="1">
                        <th>
                            <b>TICKET SCALING</b>
                        </th>
                        <th>
                            Show Type:   College
                        </th>
                        <tr>
                            <td>
                                Student
                            </td>
                            <td>
                                $number
                            </td>
                            <td>
                                @
                            </td>
                            <td>
                                $ticket_price
                            </td>
                            <td>
                                $another_number
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>TOTAL CAPACITY: </b>
                            </td>
                            <td>
                                <b>$venue_total_capacity</b>
                            </td>
                            <td>
                                 
                            </td>
                            <td>
                                <b>Gross Potential:</b>
                            </td>
                            <td>
                                <b>$gross_potential_number</b>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Total Tax%</b>
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                <b>Tax/Deductions:</b>
                            </td>
                            <td>
                                <b>$tax_number</b>
                            </td>
                            <td>
                                <b>Net Potential:</b>
                            </td>
                            <td>
                                $net_potential_number
                            </td>
                        </tr>
                        
                        
                    </table>
                </p>
                <p>
                    <b>Notes:</b>
                    $notes_text
                </p>
        </li>
        <li>
            <b>DEPOSITS/CONTRACTS: $deposits_number due upon receipt of fully executed contracts</b>
            <p>
                Purchaser will make payments as follows: all payments shall be paid by certified check, money order, bank draft, wire transfer, or cash.
                Notwithstanding the foregoing, all deposits will be paid by <b>PURCHASER</b> to <b><?php echo $Offer['OfferAgent'] ?></b> client trust account on
                behalf of Producer. Any required income tax reporting obligations of Purchaser for payments made hereunder shall be reported as soley for
                Producer, regardless of payments sent to CAA on behalf of Producer, including but not limited to deposits. <b>CONTRACTS MUST BE RETURNED WITHIN 30 DAYS OF RECEIPT, BALANCE</b> of Guarantee, Plus Percentage Payments, if any, and Sound and lights Payments, if any,
                to be paid in United States Currency by <b>PURCHASER</b> to <b>ARTIST</b> no later than Prior to Performance, evening of engagement
            </p>
        </li>
        <li>
            <b>Riders</b> Attached Hereto Are Hereby Made a Part Hereof
        </li>
        <li>
            If Artist is <b>Headlining</b> This Engagement: "<b>All Support Talent is Subject to Artist Approval.</b>"
        </li>
        <li>
            If Artist is <b>Supporting</b> This Engagement: "<b>Artist's Performance is Subject to the Appearance and Approval of the Headliner.</b>"
        </li>
        <li>
            No performance on the engagement shall be recorded, reproduced or transmitted from the place of performance, in any manner or by any means whatsoever,
            in the absence of a specific written agreement with the <b>Producer</b> relating to and permitting such recording, reproduction or transmission
        </li>
    </ol>
    
</p>
<p>
    <b><u>Signed                                   </u> (ARTIST/PRODUCER)</b>
    <b>PRODUCER: <?php $Offer['Agent_ID']?></b>
</p>
    <br/>
<p>
    <b><u>Signed                                   </u> (PURCHASER)</b>
    <b>PRODUCER: <?php $Offer['Promoter_ID']?></b>
</p>
<p>
    <b>Mail to:</b> <?php $Offer['Agent_ID']?>
</p>
<p>
    <b>Business phone:</b> $Promoter Phone ; <b>Business Fax:</b> $business fax
</p>

<p>
    <b>THE ABOVE SIGNATURES CONFIRM THAT THE PARTIES HAVE READ AND APPROVE EACH AND ALL OF THE "ADDITIONALS TERMS AND CONDITIONS" ATTACH HERETO.</b>
</p>
    

<b>Additional Terms and Conditions</b>
<p>The following additional terms and conditions are incorporated in and are part of the Agreement attached hereto.</p>
<ol>
    <li>
      PURCHASER agrees that it shall be solely responsible to provide a safe environment for the performances set forth in the Agreement (the “Performances”) including but not limited to with respect to the staging, stage covering, grounding, supervision and direction of the Engagement, and security, so that the Performances and all persons and equipment are free from adverse weather and other conditions, situation and events (“Adverse Conditions”). PRODUCER and Artist shall not have any liability for any damage or injury caused by such Adverse Conditions. PURCHASER further agrees to furnish at its sole cost and expense all that is necessary for the proper presentation of the Performances, and if required by PRODUCER, any and all rehearsals therefor, including, but not limited to:
    </li>
    <ol>
        <li>
            Equipment, materials, labor, licenses, permits, including, but not limited to, a suitable theater, hall or auditorium (well-heated, lighted, clean, and in good order), stage curtains, properly tuned grand piano(s) and any other instruments specified by PRODUCER, a public address system in perfect working condition (including microphone(s) in number and quality as required by PRODUCER), and comfortable, well-lighted dressing rooms;
        </li>
        <li>
            All stagehands, stage carpenters, electricians, electrical operators, and any other labor as necessary and/or required by any national or local union(s) to take in, hang, work, and take out all materials required for the Performance(s), including, but not limited to, scenery, properties and baggage;
        </li>
        <li>
            Any musicians and musical contractors, as may be required by any national or local union(s) in connection with the Performance(s), and any rehearsals therefore; provided, however, that PRODUCER shall have the right to name such musical contractor and to approve such musicians;
        </li>
        <li>
            All lights, tickets, house programs, licenses, including, but not limited to, any performing rights licenses, special police and security, ushers, ticket sellers for advance or single sales (wherever such sales take place), and ticket takers;
        </li>
        <li>
            Appropriate and sufficient advertising and publicity as customarily provided on a first-class basis, including, but not limited to, bill- posting, mailing, and distribution of circulars, advertising in the principal newspapers, and other media. PURCHASER shall pay all necessary expenses in connection with such required advertising and publicity.
        </li>
    </ol>
        <li>
            PURCHASER will comply promptly and professionally with PRODUCER'S directions regarding the arrangement of stage decor and settings for the Performance(s).
        </li>
        <li>
            PRODUCER will have sole and exclusive control over the production, presentation, and performance of the Performance(s), including but not limited to, the details, means, and methods of the performances of the performing artist hereunder. PRODUCER shall have the sole right as PRODUCER sees fit to designate and change, at any time, the performing personnel.
        </li>
        <li>
            The Performance(s) to be furnished by PRODUCER shall receive billing in such order, form, size, and prominence as directed by PRODUCER.
        </li>
        <li>
            PURCHASER will comply with all regulations and requirements of any national or local union(s) that may have jurisdiction over any of the materials, facilities, services, and personnel to be furnished by PURCHASER or PRODUCER, or otherwise used in the Performance(s);
        </li>
        <li>
            PURCHASER will not have the right to broadcast or televise, photograph, or otherwise reproduce the Performance(s), or any part thereof. 7. Except for local press in commercially reasonable numbers, any free admissions will be subject to PRODUCER'S prior written approval. 8. In the event that payment to PRODUCER will be based in whole or in part on the receipts of the Performance(s):
        </li>
        <li>
            Ticket prices must be submitted to and approved by PRODUCER in writing before tickets are ordered or placed on sale;
        </li>
        <ol>
            <li>
                Ticket prices must be submitted to and approved by PRODUCER in writing before tickets are ordered or placed on sale;
            </li>
            <li>
                PURCHASER will deliver to PRODUCER a certified statement of the gross box office receipts of each such performance within two (2) hours following such performance; and
            </li>
            <li>
                PRODUCER will have the right to have its representative present in the box office at all times. Such representative will have the right to examine and make extracts from box office records of PURCHASER relating to gross box office receipts of the Performance(s). PRODUCER will have the right, at its own expense, to audit PURCHASER's box office records relating to gross box office receipts of the Performance(s) upon reasonable notice on or before the date two (2) years after the Performance(s). Such audit will be conducted during normal business hours, and at PURCHASER's normal place of business where PURCHASER maintains such receipts.
            </li>
        </ol>
        <li>
            PRODUCER will have the sole and exclusive right, but not the obligation to sell souvenir programs and other souvenir items, including audio recordings in any and all formats and media, in connection with, and at, the Performance(s). The receipts thereof will belong exclusively to PRODUCER. PURCHASER will make reasonable accommodations to facilitate PRODUCER's sales activities.
        </li>
        <li>
        PURCHASER agrees that PRODUCER may cancel the Performance(s) hereunder, in PRODUCER's sole discretion, by providing at least thirty (30) days notice to PURCHASER prior to the Performance(s) date. In such event, PRODUCER will return any amounts previously paid by
        </li
    </ol>
</ol>







</div>