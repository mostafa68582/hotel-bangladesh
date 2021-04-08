<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Booking
 *
 * @property int $id
 * @property int $hotel_id
 * @property int $room_id
 * @property int $guest_id
 * @property string $guest_name
 * @property string $guest_email
 * @property string $guest_phone_number
 * @property string $arrival_date
 * @property string $departure_date
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Booking newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Booking newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Booking query()
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereArrivalDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereDepartureDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereGuestEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereGuestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereGuestName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereGuestPhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereHotelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereRoomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booking whereUpdatedAt($value)
 */
	class Booking extends \Eloquent {}
}

namespace App{
/**
 * App\Facility
 *
 * @property int $id
 * @property string $name
 * @property string $icon
 * @property string $type
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Facility newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Facility newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Facility query()
 * @method static \Illuminate\Database\Eloquent\Builder|Facility whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facility whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facility whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facility whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facility whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facility whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facility whereUpdatedAt($value)
 */
	class Facility extends \Eloquent {}
}

namespace App{
/**
 * App\FacilityHotel
 *
 * @property int $id
 * @property int $facility_id
 * @property int $hotel_id
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FacilityHotel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FacilityHotel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FacilityHotel query()
 * @method static \Illuminate\Database\Eloquent\Builder|FacilityHotel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FacilityHotel whereFacilityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FacilityHotel whereHotelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FacilityHotel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FacilityHotel whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FacilityHotel whereUpdatedAt($value)
 */
	class FacilityHotel extends \Eloquent {}
}

namespace App{
/**
 * App\FacilityRoomType
 *
 * @property int $id
 * @property int $facility_id
 * @property int $room_type_id
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FacilityRoomType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FacilityRoomType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FacilityRoomType query()
 * @method static \Illuminate\Database\Eloquent\Builder|FacilityRoomType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FacilityRoomType whereFacilityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FacilityRoomType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FacilityRoomType whereRoomTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FacilityRoomType whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FacilityRoomType whereUpdatedAt($value)
 */
	class FacilityRoomType extends \Eloquent {}
}

namespace App{
/**
 * App\Guest
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $username
 * @property string $email
 * @property string $phone_number
 * @property string $avatar
 * @property string|null $email_verified_at
 * @property string $password
 * @property string $status
 * @property string|null $date_of_birth
 * @property string|null $nationality
 * @property string|null $gender
 * @property string|null $address
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Guest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Guest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Guest query()
 * @method static \Illuminate\Database\Eloquent\Builder|Guest whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guest whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guest whereDateOfBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guest whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guest whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guest whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guest whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guest whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guest whereNationality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guest wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guest wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guest whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guest whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guest whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guest whereUsername($value)
 */
	class Guest extends \Eloquent {}
}

namespace App{
/**
 * App\Hotel
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $hotel_id
 * @property string $phone
 * @property string $email
 * @property string $website
 * @property int $star_rating
 * @property string $location
 * @property string $street_address
 * @property string $country
 * @property string $city
 * @property string $zip_code
 * @property string $district
 * @property string $thana
 * @property string $payment_method
 * @property string $remark
 * @property string $description
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel query()
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereHotelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereStarRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereStreetAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereThana($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereZipCode($value)
 */
	class Hotel extends \Eloquent {}
}

namespace App{
/**
 * App\HotelImage
 *
 * @property int $id
 * @property int $hotel_id
 * @property string $caption
 * @property string $image
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|HotelImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HotelImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HotelImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|HotelImage whereCaption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelImage whereHotelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelImage whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelImage whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelImage whereUpdatedAt($value)
 */
	class HotelImage extends \Eloquent {}
}

namespace App{
/**
 * App\HotelOwner
 *
 * @property int $id
 * @property int $hotel_id
 * @property string $name
 * @property string $phone
 * @property string $bank_name
 * @property string $account_name
 * @property string $account_number
 * @property string $bank_branch
 * @property string $payment_gateway
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|HotelOwner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HotelOwner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HotelOwner query()
 * @method static \Illuminate\Database\Eloquent\Builder|HotelOwner whereAccountName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelOwner whereAccountNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelOwner whereBankBranch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelOwner whereBankName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelOwner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelOwner whereHotelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelOwner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelOwner whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelOwner wherePaymentGateway($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelOwner wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelOwner whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HotelOwner whereUpdatedAt($value)
 */
	class HotelOwner extends \Eloquent {}
}

namespace App{
/**
 * App\Payment
 *
 * @property int $id
 * @property int $booking_id
 * @property int $guest_id
 * @property string $guest_name
 * @property int $total_amount
 * @property int $paid_amount
 * @property int $due_amount
 * @property string $payment_status
 * @property string $payment_method
 * @property string $transaction_id
 * @property string $currency
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereBookingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereDueAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereGuestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereGuestName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaidAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUpdatedAt($value)
 */
	class Payment extends \Eloquent {}
}

namespace App{
/**
 * App\Room
 *
 * @property int $id
 * @property int $hotel_id
 * @property int $room_type_id
 * @property string $name
 * @property int $room_number
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Room newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Room newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Room query()
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereHotelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereRoomNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereRoomTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereUpdatedAt($value)
 */
	class Room extends \Eloquent {}
}

namespace App{
/**
 * App\RoomType
 *
 * @property int $id
 * @property string $name
 * @property int $costs_per_day
 * @property float $size
 * @property int $capacity
 * @property int $max_adult
 * @property int $max_child
 * @property string $description
 * @property string $bed_type
 * @property int $room_service
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|RoomType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoomType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoomType query()
 * @method static \Illuminate\Database\Eloquent\Builder|RoomType whereBedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomType whereCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomType whereCostsPerDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomType whereMaxAdult($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomType whereMaxChild($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomType whereRoomService($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomType whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomType whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomType whereUpdatedAt($value)
 */
	class RoomType extends \Eloquent {}
}

namespace App{
/**
 * App\RoomTypeImage
 *
 * @property int $id
 * @property int $room_type_id
 * @property string $caption
 * @property string $image
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|RoomTypeImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoomTypeImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoomTypeImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|RoomTypeImage whereCaption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomTypeImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomTypeImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomTypeImage whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomTypeImage whereRoomTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomTypeImage whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoomTypeImage whereUpdatedAt($value)
 */
	class RoomTypeImage extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $username
 * @property string $phone_number
 * @property string $user_type
 * @property string|null $avatar
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string $status
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Hotel|null $hotel
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 */
	class User extends \Eloquent implements \Illuminate\Contracts\Auth\MustVerifyEmail {}
}

