<template>
    <div>
        <section class="banner-area relative">
            <div class="overlay overlay-bg"></div>
            <div class="banner-content text-center">
                <h1>Contact Us</h1>
                <p>
                    Elementum libero hac leo integer. Risus hac parturient feugiat litora
                    <br />
                    cursus hendrerit bibendum per
                </p>
            </div>
        </section>

        <section class="contact-page-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 d-flex flex-column address-wrap">
                        <div class="single-contact-address d-flex flex-row">
                            <div class="icon"><span class="lnr lnr-home"></span></div>
                            <div class="contact-details">
                                <h5>Binghamton, New York</h5>
                                <p>4343 Hinkle Deegan Lake Road</p>
                            </div>
                        </div>
                        <div class="single-contact-address d-flex flex-row">
                            <div class="icon">
                                <span class="lnr lnr-phone-handset"></span>
                            </div>
                            <div class="contact-details">
                                <h5>00 (958) 9865 562</h5>
                                <p>Mon to Fri 9am to 6 pm</p>
                            </div>
                        </div>
                        <div class="single-contact-address d-flex flex-row">
                            <div class="icon"><span class="lnr lnr-envelope"></span></div>
                            <div class="contact-details">
                                <h5>support@colorlib.com</h5>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-area contact-form text-right" id="contactForm" v-on:submit.prevent="saveForm()" method="post">
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <input name="name" v-model="contact.name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text"/>

                                    <input name="email" v-model="contact.email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email"/>

                                    <input name="subject" v-model="contact.subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text"/>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <textarea class="common-textarea form-control" name="message" v-model="contact.message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <div v-if="success" class="alert-msg alert alert-success" style="text-align: left;">{{success}}</div>
                                    <button class="primary-btn text-uppercase" id="submit" style="float: right;">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

</template>

<script>
    export default {
        data: function () {
            return {
                errors: [],
                contact: {
                    name: '',
                    email: '',
                    subject: '',
                    message: '',
                },
                success: '',

            }
        },
        methods: {
            saveForm() {
                var _this = this;
                var newContact = _this.contact;
                var button_loader='<i class="fa fa-spinner fa-spin"></i> Sending Message...';
                $("#submit").html(button_loader);
                axios.post('/api/contact-store', newContact)
                    .then(function (resp) {
                        if (resp.data.status == 5000){
                            _this.errors = resp.data.error;
                        }else {
                            $("#contactForm")[0].reset();
                            $("#submit").html('Send message');
                            Swal.fire({
                                // position: 'center',
                                type: 'success',
                                title: resp.data.success,
                                showConfirmButton: false,
                                timer: 3000
                            })

                        }
                    })
                    .catch(function (resp) {
                        alert("Could not create your company");
                    });
            }
        }
    }
</script>
