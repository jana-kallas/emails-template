
import React from "react";
export default function ContactBlock() {
    return(
        <>
        <div className="text-center text-black font-public w-[500px] mx-auto py-20">
            <p className="font-extrabold text-4xl -tracking-[1px] m-0">
            If you need any assistance, please
                do not hesitate to contact us
                directly. We will be happy to help.
            </p>
            <div className="text-2xl mt-10">
                <a href="tel: +44 2033016473" className="text-black">+44 2033016473</a> | <a href="mailto: cs@4t.com" className="text-black">cs@4t.com</a>
            </div>
        </div>
        </>
    )

}