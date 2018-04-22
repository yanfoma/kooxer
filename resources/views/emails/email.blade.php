@component('mail::message')

<span style="color:black">
    New Message From Kooxer {{ $name }}

    Message:{{ $message }}
</span>


@component('mail::panel', ['url' => ''])
#Contacts:

Name: {{ $name }}


Email: {{ $email }}


@endcomponent

@endcomponent
