@extends('home')

@section('content')
<template v-if="menu==0">
    <landing-page></landing-page>
</template>
<template v-if="menu==1">
    <about-page></about-page>
</template>

<template v-if="menu==2">
    <services-page></services-page>
</template>
<template v-if="menu==3">
    <contact-page></contact-page>
</template>
@endsection
