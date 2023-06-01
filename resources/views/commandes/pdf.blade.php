<!DOCTYPE html>
<html>
<head>
	<title>Invoice Template Design</title>
	<style>
         @import url('https://fonts.googleapis.com/css2?family=Lato:wght@100;400;900&display=swap');

        :root {
        --primary: #3685fb;
        --secondary: #3d3d3d; 
        --white: #fff;
        }

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Lato', sans-serif;
        }

        body{
            
            padding: 50px;
            color: #3d3d3d;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
        }

        .bold{
            font-weight: 900;
        }

        .light{
            font-weight: 100;
        }

        .wrapper{
            background: white;
            padding: 30px;
        }

        .invoice_wrapper{
            border: 3px solid #3685fb;
            width: 700px;
            max-width: 100%;
        }

        .invoice_wrapper .header .logo_invoice_wrap,
        .invoice_wrapper .header .bill_total_wrap{
            display: flex;
            justify-content: space-between;
            padding: 30px;
        }

        .invoice_wrapper .header .logo_sec{
            display: flex;
            align-items: center;
        }

        .invoice_wrapper .header .logo_sec .title_wrap{
            margin-left: 5px;
        }

        .invoice_wrapper .header .logo_sec .title_wrap .title{
            text-transform: uppercase;
            font-size: 18px;
            color: #3685fb;
        }

        .invoice_wrapper .header .logo_sec .title_wrap .sub_title{
            font-size: 12px;
        }

        .invoice_wrapper .header .invoice_sec,
        .invoice_wrapper .header .bill_total_wrap .total_wrap{
            text-align: right;
        }

        .invoice_wrapper .header .invoice_sec .invoice{
            font-size: 28px;
            color: #3685fb;
        }

        .invoice_wrapper .header .invoice_sec .invoice_no,
        .invoice_wrapper .header .invoice_sec .date{
            display: flex;
            width: 100%;
        }

        .invoice_wrapper .header .invoice_sec .invoice_no span:first-child,
        .invoice_wrapper .header .invoice_sec .date span:first-child{
            width: 70px;
            text-align: left;
        }

        .invoice_wrapper .header .invoice_sec .invoice_no span:last-child,
        .invoice_wrapper .header .invoice_sec .date span:last-child{
            width: calc(100% - 70px);
        }

        .invoice_wrapper .header .bill_total_wrap .total_wrap .price,
        .invoice_wrapper .header .bill_total_wrap .bill_sec .name{
            color: #3685fb;
            font-size: 20px;
        }
        table{
            width: 100%;
        }
        thead{
            background-color: #3685fb;
        }
        thead tr td{
            color: white;
            font-size:18px;
            border-bottom: 0;
            background-color: #3685fb;
            text-align: center;
            margin-left: 0;
        }
        tbody tr td{
            text-align: center;
        }

        .invoice_wrapper .body .paymethod_grandtotal_wrap{
            margin-top: 10px; 
            display: flex;
            justify-content: space-between;
            padding: 5px 0 30px;
            align-items: flex-end;
        }

        .invoice_wrapper .body .paymethod_grandtotal_wrap .paymethod_sec{
            padding-left: 30px;
        }

        .invoice_wrapper .body .paymethod_grandtotal_wrap .grandtotal_sec{
            width: 30%;
        }

        .invoice_wrapper .body .paymethod_grandtotal_wrap .grandtotal_sec p{
            display: flex;
            width: 100%;
            padding-bottom: 5px;
        }

        .invoice_wrapper .body .paymethod_grandtotal_wrap .grandtotal_sec p span{
            padding: 0 10px;
        }

        .invoice_wrapper .body .paymethod_grandtotal_wrap .grandtotal_sec p span:first-child{
            width: 60%;
        }

        .invoice_wrapper .body .paymethod_grandtotal_wrap .grandtotal_sec p span:last-child{
            width: 40%;
            text-align: right;
        }

        .invoice_wrapper .body .paymethod_grandtotal_wrap .grandtotal_sec p:last-child span{
            background: #3685fb;
            padding: 10px;
            color: #fff;
        }

        .invoice_wrapper .footer{
            padding: 30px;
        }

        .invoice_wrapper .footer > p{
            color: #3685fb;
            text-decoration: underline;
            font-size: 18px;
            padding-bottom: 5px;
        }

        .invoice_wrapper .footer .terms .tc{
            font-size: 16px;
        }
    </style>
    
</head>
<body>

<div class="wrapper">
	<div class="invoice_wrapper">
		<div class="header">
			<div class="logo_invoice_wrap">
				<div class="logo_sec">
					<div class="title_wrap">
						<p class="title bold">EnsiDelivery</p>
					</div>
				</div>
				<div class="invoice_sec">
					<p class="invoice bold">BON DE LIVRAISON</p>
					<p class="invoice_no">
						<span class="bold">commande</span>
						<span>#{{ $commande->id_commande }}</span>
					</p>
					<p class="date">
						<span class="bold">Date</span>
						<span>{{ $commande->created_at }}</span>
					</p>
                    <p class="date">
						<span class="bold">Lieu</span>
						<span>{{ $commande->ville }}</span>
					</p>
                    <p class="date">
						<span class="bold">Numéro de client</span>
						<span>#{{ $commande->id_client }}</span>
					</p>
				</div>
			</div>
			<div class="bill_total_wrap">
				<div class="bill_sec">
					<p>Destinataire</p> 
	          		<p class="bold name">{{ $commande->nom_destinataire }} {{ $commande->prenom_destinataire }}</p>
			        <span>
			           {{ $commande->quartier }}, {{ $commande->N°_immeuble }}, {{ $commande->ville }}<br/>
			           0{{ $commande->telephone }}
			        </span>
				</div>
				
			</div>
		</div>
		<div class="body">
			<table class="main_table">
				<thead class="table_header">
					<tr class="row">
						<td class="col col_no">NO.</td>
						<td class="col col_des">Contenue</td>
						<td class="col col_price">PRIX (MAD)</td>
                        <td class="col col_qty">POID (KG)</td>
						<td class="col col_qty">TYPE</td>
                    </tr>
				</thead>
				<tbody class="table_body">
					<tr class="row">
						<td class="col col_no">
							<p>{{ $commande->id_commande }}</p>
						</td>
						<td class="col col_des">
							<p class="bold">{{ $commande->contenue }}</p>
						</td>
						<td class="col col_price">
							<p>{{ $commande->prix }}</p>
						</td>
						<td class="col col_qty">
							<p>{{ $commande->poid }}</p>
						</td>
                        <td class="col col_qty">
							<p>{{ $commande->type }}</p>
						</td>
						
					</tr>
				</tbody>
			</table>
			<div class="paymethod_grandtotal_wrap">
				<div class="paymethod_sec">
					<p class="bold">Options de paiments</p>
					<p>{{ $commande->paiment }}</p>
				</div>
			</div>
		</div>
		<div class="footer">
			<p>Merci et meilleurs voeux</p>
			<div class="terms">
		        <p class="tc bold">Termes et conditions</p>
		        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit non praesentium doloribus. Quaerat vero iure itaque odio numquam, debitis illo quasi consequuntur velit, explicabo esse nesciunt error aliquid quis eius!</p>
		    </div>
		</div>
	</div>
</div>


</body>
</html>