## Assessment

Use BNM Open API Data

* Kijang_Emas

![alt text](https://github.com/amalinafz/assmnt/blob/master/public/images/1.png "Kijang_Emas")

* OPR

![alt text](https://github.com/amalinafz/assmnt/blob/master/public/images/2.png "OPR")

* kl-usd-reference-rate

![alt text](https://github.com/amalinafz/assmnt/blob/master/public/images/3.png "kl-usd-reference-rate")


***

Able to retrieve the body via POSTMAN but unable to retrieve by using controller.

```
$client = new Client();
        $result = $client->get('https://api.bnm.gov.my/public/opr', [
            'headers' => [
                'Accept' => 'application/vnd.BNM.API.v1+json',
                'Content-Type' => 'application/json',
            ],
        ]);

        echo $result->getStatusCode();
        echo $result->getBody();
        if ($result->getStatusCode() == 200) { // 200 OK
        $response_data = $result->getBody()->getContents();
        }
```
![alt text](https://github.com/amalinafz/assmnt/blob/master/public/images/Reject.png "Rejected")

## Output

1. Main

![alt text](https://github.com/amalinafz/assmnt/blob/master/public/images/4.png "Main")

2. Kijang_Emas

![alt text](https://github.com/amalinafz/assmnt/blob/master/public/images/5.png "Kijang_Emas")

3. OPR

![alt text](https://github.com/amalinafz/assmnt/blob/master/public/images/6.png "OPR")

4. KL-USD-Reference-Rate

![alt text](https://github.com/amalinafz/assmnt/blob/master/public/images/7.png "kl-usd-reference-rate")


