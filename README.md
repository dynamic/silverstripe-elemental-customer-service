# SilverStripe Elemental Customer Service Block

Display a map, directions, and contact info for your location.

[![CI](https://github.com/dynamic/silverstripe-elemental-customer-service/actions/workflows/ci.yml/badge.svg)](https://github.com/dynamic/silverstripe-elemental-customer-service/actions/workflows/ci.yml)
[![codecov](https://codecov.io/gh/dynamic/silverstripe-elemental-customer-service/branch/master/graph/badge.svg)](https://codecov.io/gh/dynamic/silverstripe-elemental-customer-service)

[![Latest Stable Version](https://poser.pugx.org/dynamic/silverstripe-elemental-customer-service/v/stable)](https://packagist.org/packages/dynamic/silverstripe-elemental-customer-service)
[![Total Downloads](https://poser.pugx.org/dynamic/silverstripe-elemental-customer-service/downloads)](https://packagist.org/packages/dynamic/silverstripe-elemental-customer-service)
[![Latest Unstable Version](https://poser.pugx.org/dynamic/silverstripe-elemental-customer-service/v/unstable)](https://packagist.org/packages/dynamic/silverstripe-elemental-customer-service)
[![License](https://poser.pugx.org/dynamic/silverstripe-elemental-customer-service/license)](https://packagist.org/packages/dynamic/silverstripe-elemental-customer-service)


## Requirements

* dnadesign/silverstripe-elemental: ^4.8
* dynamic/silverstripe-geocoder: ^2.0

## Installation

`composer require dynamic/silverstripe-elemental-customer-service`

## Usage

Adds a Customer Service block to display a map, directions and contact info for your location. Userful for a Contact Us page.

### Note
In order to use the Geocoder and address map, you will have to create an [API key](https://developers.google.com/maps/documentation/javascript/get-api-key). It can be configured in your YML file like this:

```
Dynamic\SilverStripeGeocoder\GoogleGeocoder:
  geocoder_api_key: 'your-key-here'
```

## Screen Shots

#### Front End sample of a Customer Service Element
![Front End sample of a Customer Service Element](./readme-images/customer-service-block-sample.jpg)

#### CMS - Customer Service Element Main Tab
![CMS - Customer Service Element Main Tab](./readme-images/customer-service-block-cms.jpg)

#### CMS - Customer Service Element - Address Tab
![CMS - Customer Service Element - Address Tab](./readme-images/customer-service-block-cms-address.jpg)

## Getting more elements

See [Elemental modules by Dynamic](https://github.com/dynamic/silverstripe-elemental-blocks#included-blocks)

## Configuration

See [SilverStripe Elemental Configuration](https://github.com/dnadesign/silverstripe-elemental#configuration)
