<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/4
 * Time: 9:09
 */
// +----------------------------------------------------------------------
// | 支付宝设置
// +----------------------------------------------------------------------

return [
    "app_id" => "2018051660129676",
    "private_key" => "MIIEpQIBAAKCAQEA3AIQjin4ZwSfVjek5cXriNw2vEAbgUYEeWVVU9JEc3BdJF01K96swNkz0iaAV98OBQsIux3t1eEF7QUgzeFepsGW4/3jd46GoEp0QgDjEF85fYdnlvI+tfNUoSWbQnkxJ2SgAT1LmxRaBEiU0LHeewFv3aUmalz2B0f4d2w2vEI1sm7Vck6+gmBcGXGgN8ZSNoiSH3RhNdBuILgyplUqPJLVEyXbK7a6z6o58hK9p5WRVLYAA7Lk5J4aMjLCP0ivTAD1HBbfI3e2oqJdTtdzjNPVFmIn0o0Sz+yiWLd1qdQWNGPZBevod9PO8ZknDKBTEx+VAA0Qk9dksPp4xFolKwIDAQABAoIBAQDC+ZFya/+YTKBo6Cda+mwifgaEDsxRZJvSeduEzXOcWpgxAel9V3oB7nveYgCb3zGthnnWWk/Mm/+EbmcEDhaz8hynMPnFmqn0pAcj92VDvSBV/wnu3AB3f44gwhM2dfD52FN0xb2bUg30fd5klT12BW/+Hb5NxNTE3yNzspNPgjjCGaD0fbbZwDDPmKyHxzD+zR6moPk8UKk0k7rYfEwG38EAwf1R/CX4WWmigSAf6oSzBETHLrdwLwBxV2vpdYH8UzdkJ50VCzhsOKQXVz0kQktawIrAtm+82NqCtY4XAOB+rB/C5zbN/7HnlhpKbQO5P9XTF0au90SI0o6mFUsBAoGBAPg+f1ZJbaU0eQZK9n0Kt33WzkM1ig1sJ7qspX+g82GRjYwweWHX/2yLh9C2lS7dxegGlhhMF+x7Wh7qzsd+zE+5Lo+i9QW81C04gUAuEEUXk0wX3a29xTE37EcS9SajWgtVsTLoqdqcG/qLKqSBJ4kP2GCdWkxTTpQK5469/2+HAoGBAOLhut9utA4O5SxE6yVKKu4EnqyfcbucMsLyCpd2imKtXdPQdyqtBwhbjQiiIAg5nUmLlN5/qjWhX7HKvbKIM68LmwTk5XnJMacSdsxg+ZYBmJ7elqXM13cEtewBkAWgJty/5N5TY6ao15DOfSuoWq8LlY9rGnamGOECf7Lob149AoGAVQaa+MP3sSES3svoNxXnmUtspGp/GW/U/8RIfzlygxWmhMDJonCoBNaZsywGVuIQ+hLfb/0IKLBrQrGsF3pfomLMBtiK0edGSSLUalYcrn2Prv1xqSOZme0MmZ9tpklG+yDjq4szOjREBQGLnoK6NuDdfOIIXqIeBOjjPOnoxpsCgYEAigIXQzw6yGZlHwWZJ+iyrnAe+RBQBXghJJZIvRN9YELm1SZ0pn/zzDCsXHkKFRa+x3LhjmqH5fGQnTyfIY9aKPtdQ5/curUYv/EqVG4UxBuac+EgMCCnXB2Ab9wPeGyP1y3fESIWdtUzs0D3wOu6pcndIw1aXpvwfEah2PksbV0CgYEA7W8kK7/iydwqOmN51i6+AcqB1hnthjY4yhxwBJYq+4R9qDI6e32h/2HO3NtK8CTVexmTC/z8sG3/GrpMfTDw3b58M22cVxpauKuxY8QAs9GoDSAKx8MXNWlJRHzdctjKi19lZxagI/E6XP/B46XK8dX15kRM2UkB2dEsloStNfI=",
    "notify_url" => "http://app.91huirong.com/app/customer/upgradeAlipayNotify",
    "return_url" => "http://mitsein.com/alipay.trade.wap.pay-PHP-UTF-8/return_url.php",
    "charset" => "UTF-8",
    "sign_type" => "RSA2",
    "gatewayUrl" => "https://openapi.alipay.com/gateway.do",
    "public_key" => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA5xC3MpuGZaI6pXoXhwYYwGQXuCkeHIjphTpnByaWuYnnb7T4tWZsIiWoH/rNStvlcVPbeqBd/pdERDqO7pvR8k7d4AXUZhKmpfVpjGOPYoicGQxWCdp6h/XCt1mvAskPozA8+zb43/ElTks5Fh7mf5dBjb6BNpKzLoot0N+tZNpygugOu6L4bhHTdihzRr9ySXq/3vwLgrkRgfGGR5lZOBOtcBb0ia0WhxAARHEojDe2T+/aFypYmrm8MEHzf7xFLBSwRHE446WCIkTx2HzOOPpkRlX1pqk82hg9j16YQEpVjQ5S25+VEmkhLiQJRGw7xi4Gw7I8ifoww6Ft+ObsCQIDAQAB"
];