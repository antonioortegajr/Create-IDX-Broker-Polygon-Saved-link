# IDXBroker Polygon saved link API PUT


Creation of a polygon saved link requires latitude and longitude points.

These can be created in an IDX Broker account and pulled via an API GET call for savedlinks.

In the url string that contains the lat and long points do not include the plus signs as this appears to cause an encoding issue.

As with all URLs there is a limit to the amount of characters allowed. The more complicated the polygon the longer the urls string will be. Adding additional filers will make this string even longer. Should you reach the limit a URL can handle the savedlink may not function correctly. Simpler shapes are best. Complex shapes should be efficient in the amount of points used.


Standard Disclaimer: This code is not official IDX Broker code. It does use their API, but in NO WAY is it supported by IDX Broker. DO NOT contact IDX Broker for any support of this code.
