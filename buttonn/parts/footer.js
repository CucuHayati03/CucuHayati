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
                </div>
            </div>
        </footer>
    )
}