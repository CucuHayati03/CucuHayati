import React from "react";

import Button from "elements/Button";
import IconText from "parts/IconText";
export default function footer() {
    return (
        <footer>
            <div className="container">
                <div classname="row">
                    <div className="col">
                        <IconText />
                        <p className="brand-tagLine">
                            We kaboon your beauty holiday instantly memorable.
                        </p>
                    </div>
                    <div className="col-2 mr-5">
                        <h6 className="mt-2">For Beinners</h6>
                        <ul classsName="LIst-group Lis-group-flush">
                            <li classname="list-group-item">
                                <Button type="link" href="/register">
                                    New Account
                                </Button>
                            </li>
                            <li classname="list-group-item">
                                <Button type="link" href="/properties">
                                    Start Booking a Room
                                </Button>
                            </li>
                            <li classname="list-group-item">
                                <Button type="link" href="/use-payments">
                                    Use Payments
                                </Button>
                            </li>
                        </ul>
                    </div>
                    <div className="col-2 mr-5">
                    <h6 className="mt-2">Explore Us</h6>
                        <ul classsName="LIst-group Lis-group-flush">
                            <li classname="list-group-item">
                                <Button type="link" href="/careers">
                                   Our careers
                                </Button>
                            </li>
                            <li classname="list-group-item">
                                <Button type="link" href="/privacy">
                                    Privacy
                                </Button>
                            </li>
                            <li classname="list-group-item">
                                <Button type="link" href="/terms">
                                    Terms & Conditions
                                </Button>
                            </li>
                        </ul>
                    </div>
                    <div className="col-4">
                    <h6 className="mt-2">Connect Us</h6>
                        <ul classsName="LIst-group Lis-group-flush">
                            <li classname="list-group-item">
                                <Button isExternal type="link" href="mailto:support@sraycation.id">
                                   Support@staycation.id
                                </Button>
                            </li>
                            <li classname="list-group-item">
                                <Button isexternal type="link" href="tel:+622122081996">
                                    021 - 2200 - 1996
                                </Button>
                            </li>
                            <li classname="list-group-item">
                                <span>Staycation, Kemang, Jakarta</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div classname="row">
                    <div className="col text-center copyrights">
                        Copyright 2019 . All right reserved . Staycation
                    </div>
                </div>
            </div>
        </footer>
    )
}