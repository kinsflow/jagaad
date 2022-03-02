# STEP 2
###### Solution to the step 2 of the Technical Homework

### Solution 1 :- endpoint/s to set the forecast for a specific city

endpoint:-

```
    POST: /api/v3/cities/:cityId/forecast
```

payload:-

```json
    {
          "date": "2022-03-20",
          "date_epoch": "1646179200",
          "condition": {
            "text": "Sunny",
            "code": 1000
          },
          "will_it_rain": 0,
          "chance_of_rain": 0,
          "will_it_snow": 0,
          "chance_of_snow": 0,
          "astro": {
            "sunrise": "07:25 AM",
            "sunset": "06:21 PM",
            "moonrise": "07:54 AM",
            "moonset": "05:56 PM",
            "moon_phase": "New Moon",
            "moon_illumination": "0"
          },
          "hour": [
            {
                "time_epoch": 1646175600,
                "time": "2022-03-02 00:00",
                "temp_c": 5.9,
                "temp_f": 42.6,
                "is_day": 0,
                "condition": {
                    "text": "Overcast",
                    "code": 1009
                },
                "wind_mph": 4.7,
                "wind_kph": 7.6,
                "wind_degree": 69,
                "wind_dir": "ENE",
                "pressure_mb": 1027,
                "pressure_in": 30.32,
                "precip_mm": 0,
                "precip_in": 0,
                "humidity": 81,
                "cloud": 97,
                "feelslike_c": 4.3,
                "feelslike_f": 39.7,
                "windchill_c": 4.3,
                "windchill_f": 39.7,
                "heatindex_c": 5.9,
                "heatindex_f": 42.6,
                "dewpoint_c": 2.9,
                "dewpoint_f": 37.2,
                "will_it_rain": 0,
                "chance_of_rain": 0,
                "will_it_snow": 0,
                "chance_of_snow": 0,
                "vis_km": 10,
                "vis_miles": 6,
                "gust_mph": 8.3,
                "gust_kph": 13.3,
                "uv": 1
            }
        ]
    }


```
response:-

```json
{
    "status": "success",
    "code": "201",
    "message": "Weather Information for city created successfully",
    "data": []
}
```

behaviour:-
```
the expected behaviour of this to the cityId in the route param and then every other data that related
to the weather that is be computed is attached to the POST payload
```


### Solution 2 :- endpoint/s to read the forecast for a specific city

endpoint:-

```
    GET: /api/v3/cities/:cityId/forecast?date=2022-03-20
```

response:-

```json
{
    "status": "success",
    "code": "200",
    "message": "Weather Information for city returned successfully",
    "data": [
        "weather": {
            "location": {
                "name": "De Wallen",
                "region": "North Holland",
                "country": "Netherlands",
                "lat": 52.37,
                "lon": 4.9,
                "tz_id": "Europe/Amsterdam",
                "localtime_epoch": 1646246403,
                "localtime": "2022-03-02 19:40"
            },
            "current": {
                "last_updated_epoch": 1646245800,
                "last_updated": "2022-03-02 19:30",
                "temp_c": 6,
                "temp_f": 42.8,
                "is_day": 0,
                "condition": {
                    "text": "Clear",
                    "icon": "//cdn.weatherapi.com/weather/64x64/night/113.png",
                    "code": 1000
                },
                "wind_mph": 5.6,
                "wind_kph": 9,
                "wind_degree": 70,
                "wind_dir": "ENE",
                "pressure_mb": 1021,
                "pressure_in": 30.15,
                "precip_mm": 0,
                "precip_in": 0,
                "humidity": 65,
                "cloud": 0,
                "feelslike_c": 4.1,
                "feelslike_f": 39.3,
                "vis_km": 10,
                "vis_miles": 6,
                "uv": 3,
                "gust_mph": 8.7,
                "gust_kph": 14
            },
            "forecast": {
                "forecastday": [
                    {
                        "date": "2022-03-02",
                        "date_epoch": 1646179200,
                        "day": {
                            "maxtemp_c": 10.5,
                            "maxtemp_f": 50.9,
                            "mintemp_c": 3.5,
                            "mintemp_f": 38.3,
                            "avgtemp_c": 6.6,
                            "avgtemp_f": 43.8,
                            "maxwind_mph": 7.6,
                            "maxwind_kph": 12.2,
                            "totalprecip_mm": 0,
                            "totalprecip_in": 0,
                            "avgvis_km": 10,
                            "avgvis_miles": 6,
                            "avghumidity": 66,
                            "daily_will_it_rain": 0,
                            "daily_chance_of_rain": 0,
                            "daily_will_it_snow": 0,
                            "daily_chance_of_snow": 0,
                            "condition": {
                                "text": "Sunny",
                                "icon": "//cdn.weatherapi.com/weather/64x64/day/113.png",
                                "code": 1000
                            },
                            "uv": 1
                        },
                        "astro": {
                            "sunrise": "07:25 AM",
                            "sunset": "06:21 PM",
                            "moonrise": "07:54 AM",
                            "moonset": "05:56 PM",
                            "moon_phase": "New Moon",
                            "moon_illumination": "0"
                        },
                        "hour": [
                            {
                                "time_epoch": 1646175600,
                                "time": "2022-03-02 00:00",
                                "temp_c": 5.9,
                                "temp_f": 42.6,
                                "is_day": 0,
                                "condition": {
                                    "text": "Overcast",
                                    "icon": "//cdn.weatherapi.com/weather/64x64/night/122.png",
                                    "code": 1009
                                },
                                "wind_mph": 4.7,
                                "wind_kph": 7.6,
                                "wind_degree": 69,
                                "wind_dir": "ENE",
                                "pressure_mb": 1027,
                                "pressure_in": 30.32,
                                "precip_mm": 0,
                                "precip_in": 0,
                                "humidity": 81,
                                "cloud": 97,
                                "feelslike_c": 4.3,
                                "feelslike_f": 39.7,
                                "windchill_c": 4.3,
                                "windchill_f": 39.7,
                                "heatindex_c": 5.9,
                                "heatindex_f": 42.6,
                                "dewpoint_c": 2.9,
                                "dewpoint_f": 37.2,
                                "will_it_rain": 0,
                                "chance_of_rain": 0,
                                "will_it_snow": 0,
                                "chance_of_snow": 0,
                                "vis_km": 10,
                                "vis_miles": 6,
                                "gust_mph": 8.3,
                                "gust_kph": 13.3,
                                "uv": 1
                            }
                        ]
                    }
                ]
            }
        }
    ]
}
```
behaviour:-

```
the bahavour of this endpoint is such that you can return the weather history of a particulr city
and to anser some possible questions, we added a date filter possiblilty that allows for filter
of weather infirmation based on date. and this can be acheived by passing a `date` as a query
param and this `date` takes in a date formate value e.g 2022-02-30
```
