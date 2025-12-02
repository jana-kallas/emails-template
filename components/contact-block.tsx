
import React from "react";
type ContactProps = {
  contactText: string;
};
export default function ContactBlock({contactText} : ContactProps) {
    return(
        <>
        <div className="text-center text-black font-public mx-auto py-8">
            <p className="font-extrabold text-xl leading-tight -tracking-[1px] m-0">
                {contactText}
            
            </p>
            <div className="text-base mt-10">
                 <span dir="ltr" className="inline-block">
                    <a href="tel:+442033016473" className="text-black">+44 2033016473</a>
                </span>
                {" | "}
                <span dir="ltr" className="inline-block">
                    <a href="mailto:cs@4t.com" className="text-black">cs@4t.com</a>
                </span>
            </div>
        </div>
        </>
    )

}