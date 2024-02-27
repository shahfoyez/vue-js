<style>
    .muliform_anom div#input_11_11, .muliform_anom div#input_11_12 {
        display: flex;
        gap: 24px;
        justify-content: center;
        align-items: center;
    }
    .muliform_anom .gchoice.gchoice_11_11_1 {
        display: flex;
        flex-direction: row-reverse;
        text-align: center;
    }

    .muliform_anom .gchoice.gchoice_11_11_2 {
        display: flex;
        flex-direction: row-reverse;
        text-align: center;
    }

    .muliform_anom .gchoice.gchoice_11_11_3 {
        display: flex;
        flex-direction: row-reverse;
        text-align: center;
    }


    .muliform_anom .gchoice.gchoice_11_12_1 {
        display: flex;
        flex-direction: row-reverse;
        text-align: center;
    }

    .muliform_anom .gchoice.gchoice_11_12_2 {
        display: flex;
        flex-direction: row-reverse;
        text-align: center;
    }

    .muliform_anom .gchoice.gchoice_11_12_3 {
        display: flex;
        flex-direction: row-reverse;
        text-align: center;
    }


    /* certificate order section css start  */
    #a2n_order-wrapper #gform_fields_11_2,
    #a2n_order-wrapper #gform_fields_11_3{
        box-shadow: rgba(50, 71, 92, 0.06) 0px 1px 7px 1px, rgba(50, 71, 92, 0.04) 0px 3px 7px 1px, rgba(50, 71, 92, 0.02) 0px 1px 4px 2px;
        max-width: 672px;
        padding: 20px;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        border-radius: 4px;
        gap: 8px;
        background: white;
        margin: 0 auto;
        margin-bottom: 16px;
    }
    #a2n_order-wrapper #gf_progressbar_wrapper_11, #a2n_order-wrapper #field_11_5 {
        display: none;
    }
    #a2n_order-wrapper .gchoice {
        display: flex;
        text-align: center;
        justify-content: center;
        position: relative;
        box-shadow: rgba(50, 71, 92, 0.06) 0px 1.00568px 7.03977px 1.00568px,
        rgba(50, 71, 92, 0.04) 0px 3.01705px 7.03977px 1.00568px,
        rgba(50, 71, 92, 0.02) 0px 1.00568px 4.02273px 2.01136px;
        width: 200px;
        border-radius: 4px;
        text-align: center;
        background-color: rgb(255, 255, 255);
        border: 1px solid rgb(235, 235, 236);
        overflow: hidden;
        padding: 18px;
    }

    #a2n_order-wrapper input[type="button"] {
        color: rgb(0, 35, 51);
        background-color: rgb(0, 255, 132);
        padding: 10.8px 32px;
        font-size: 16px;
        line-height: 24px;
        font-weight: 700;
        border-radius: 4px;
        margin: 0;
    }

    #a2n_order-wrapper .gform_wrapper.gravity-theme legend {
        margin-left: 0;
        margin-right: 0;
        border: 0;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        color: rgb(59, 86, 98);
        letter-spacing: 0.009375rem;
    }
    #a2n_order-wrapper .gform-field-label h2 {
        font-size: 11.2px;
        font-family: "Poppins", sans-serif;
        line-height: 24px;
        color: rgb(59, 86, 98);
        letter-spacing: 0.009375rem;
        font-weight: 700;
        margin: 0;
    }
    #a2n_order-wrapper .gform-field-label p {
        font-size: 12px;
        font-weight: 400;
        color: rgb(59, 86, 98);
        line-height: 16px;
        margin: 0;
        margin-top: 8px;
    }
    #a2n_order-wrapper .gform-field-label p:last-child span {
        font-size: 12px;
        font-weight: 400;
        color: rgb(59, 86, 98);
        line-height: 16px;
        text-decoration: line-through;
    }
    #a2n_order-wrapper .gform-field-label p:last-child {
        font-size: 16px;
        line-height: 24px;
        letter-spacing: 0.009375rem;
        color: rgb(0, 35, 51);
        font-weight: 600;
    }
    #a2n_order-wrapper .gchoice input[type="checkbox"] {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100% !important;
        cursor: pointer;
        opacity: 0;
    }
    #a2n_order-wrapper .gchoice:has(> input[type="checkbox"]:checked) {
        position: relative;
        background-color: rgb(230, 255, 243);
        border: 1px solid rgb(0, 255, 132);
    }
    #a2n_order-wrapper .gchoice label::before {
        position: absolute;
        top: 10px;
        right: 10px;
        content: url("https://adamsfcstg.wpenginepowered.com/wp-content/uploads/2023/12/vlbi7wfejwglqc6r2iz.svg");
        width: 20px;
        height: 20px;
        visibility: hidden;
        cursor: pointer;
    }
    #a2n_order-wrapper .gchoice input[type="checkbox"]:checked + label::before {
        visibility: visible;
    }
    #a2n_order-wrapper .gform_page_footer {
        background-color: rgb(230, 233, 235);
        border-top: 2px solid rgb(36, 103, 236);
        display: flex;
        justify-content: flex-end;
        align-items: center;
        padding: 24px;
    }
    #a2n_order-wrapper input#gform_previous_button_11_3,
    #a2n_order-wrapper input#gform_previous_button_11_7,
    #a2n_order-wrapper input#gform_previous_button_11 {
        background-color: transparent;
        color: rgb(31, 15, 140);
        padding: 6px 16px;
    }
    #a2n_order-wrapper input#gform_next_button_11_7 {
        color: rgb(45, 45, 45);
        padding: 8px 32px;
    }
    #a2n_order-wrapper input#gform_submit_button_11{
        font-size: 16px;
        line-height: 24px;
        font-weight: 700;
        border-radius: 4px;
        color: rgb(0, 35, 51);
        padding: 8px 32px;
        margin: 0;
    }
    #a2n_order-wrapper #gform_fields_11_4 {
        width: 80%;
        margin: 0 auto;
        padding: 16px 0;
    }
    #a2n_order-wrapper #gform_fields_11_4 label {
        margin: 0px 0px 8px;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        letter-spacing: 0.009375rem;
        color: rgb(59, 86, 98);
    }
    #a2n_order-wrapper #gform_fields_11_4 fieldset input,
    #a2n_order-wrapper #gform_fields_11_4 fieldset select {
        padding: 16.5px 14px;
        border: 1px solid rgba(0, 0, 0, 0.23);
        font-family: "Poppins", sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 23px;
        color: rgb(0, 35, 51);
        letter-spacing: 0.009375rem;
        border-radius: 4px;
        background-color: rgb(245, 245, 245);
        height: 45px;
    }
    #a2n_order-wrapper #gform_fields_11_4 fieldset input:hover {
        border-color: rgb(0, 35, 51);
    }
    #a2n_order-wrapper #gform_fields_11_4 fieldset input:focus {
        border: 2px solid rgb(0, 35, 51);
    }
    #a2n_order-wrapper #field_11_9 label, #a2n_order-wrapper #field_11_8 label{
        margin: 0px;
        font-size: 14px;
        color: rgb(59, 86, 98);
        line-height: 24px;
        font-weight: 500;
    }
    #a2n_order-wrapper input#input_11_9,
    #a2n_order-wrapper #input_11_8 {
        margin: 0px;
        font-size: 16px;
        line-height: 24px;
        color: rgb(59, 86, 98);
        letter-spacing: 0.009375rem;
        font-weight: 600;
        padding: 0;
    }
    #a2n_order-wrapper #field_11_9, #a2n_order-wrapper #field_11_8 {
        position: absolute;
        bottom: 20px;
        left: 24px;
    }
    /* #a2n_order-wrapper input#gform_next_button_11_7:disabled {
	  cursor: not-allowed;
	  color: rgba(0, 0, 0, 0.26);
	  background-color: rgba(0, 0, 0, 0.12);
	} */

    #a2n_order-wrapper #gform_page_11_1 .gform_page_footer {
        background-color: transparent;
        border: 0;
        justify-content: center;
        padding: 0;
    }
    #a2n_order-wrapper #field_11_1{
        margin: 0px;
        font-family: 'Manrope', sans-serif;
        font-size: 34px;
        font-weight: 700;
        color: rgb(0, 35, 51);
        letter-spacing: 0.016rem;
        line-height: 48px;
        text-align: center;
    }

    @media (max-width: 1024px){
        #a2n_order-wrapper .gform_page_fields {
            padding: 0 16px;
        }
    }
    @media (max-width: 767px){
        .muliform_anom div#input_11_11, .muliform_anom div#input_11_12 {
            flex-wrap: wrap;
        }
        #a2n_order-wrapper #field_11_9, #a2n_order-wrapper #field_11_8 {
            bottom: 8px;
            left: 16px;
        }
        #a2n_order-wrapper .gform_page_footer {
            padding: 16px;
        }
        #a2n_order-wrapper #field_11_1{
            font-size: 24px;
            line-height: 32px;
        }
        #a2n_order-wrapper #field_11_1 > span{
            flex-wrap: wrap;
        }
    }
    /* certificate order section css end  */



    /*price hide*/

    #field_11_17, #field_11_21, #field_11_22 {
        visibility: hidden;
        height: 0 !important;
    }

    div#field_11_24,div#field_11_26,div#field_11_27 {
        visibility: hidden;
        height: 0 !important;
    }

    #field_11_30{
        display: grid;
    }1
</style>