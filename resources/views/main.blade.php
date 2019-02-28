@extends('layouts.layout')

bannerkeywords test - {{ $bannerKeywords }}
<br/><br/>

portalTopnews test<br/>
@foreach($portalTopnews as $publication)
    <li>{{ $publication->heading }}</li>
@endforeach

<br/><br/>

dailyTopnews test<br/>

@forelse($dailyTopnews as $publication)
    <li>{{ $publication->heading }}</li>
@empty
    empty
@endforelse

<br/><br/>


$liteTopnews test<br/>

@forelse($liteTopnews as $publication)
    <li>{{ $publication->heading }}</li>
@empty
    empty
@endforelse

<br/><br/>

$stylerTopnews test<br/>

@forelse($stylerTopnews as $publication)
    <li>{{ $publication->heading }}</li>
@empty
    empty
@endforelse

<br/><br/>

$videoTopnews test<br/>

@forelse($videoTopnews as $publication)
    <li>{{ $publication->heading }}</li>
@empty
    empty
@endforelse

<br/><br/>

$reviewTopnews test<br/>

@forelse($reviewTopnews as $publication)
    <li>{{ $publication->heading }}</li>
@empty
    empty
@endforelse

<br/><br/>

$liteFeed test<br/>

@forelse($liteFeed as $publication)
    <li>{{ $publication->heading }}</li>
@empty
    empty
@endforelse

<br/><br/>

$sportFeed test<br/>

@forelse($sportFeed as $publication)
    <li>{{ $publication->heading }}</li>
@empty
    empty
@endforelse

<br/><br/>

$companyFeed test<br/>

@forelse($companyFeed as $publication)
    <li>{{ $publication->heading }}</li>
@empty
    empty
@endforelse

<br/><br/>

$newsFeed test<br/>

@forelse($newsFeed as $publication)
    <li>{{ $publication->heading }}</li>
@empty
    empty
@endforelse

<br/><br/>
