<style scoped lang="scss">
.main-nav {
  padding: 8px 24px;
}
ul {
  display: flex;
  list-style-type: none;
  padding-left: 0 !important;
  margin: 0;
  border-bottom: 1px solid rgb(229, 231, 235);
  li {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 16px 20px;
    font-size: 0.9125rem;
    font-weight: 500;
    cursor: pointer;
    color: rgb(55, 65, 81);
    margin-bottom: -1px;
    @media only screen and(max-width: 600px) {
      padding: 16px 12px;
    }
    svg {
      fill: rgb(55, 65, 81);
      width: 20px;
    }
    &.active {
      border-bottom: 2px solid var(--primary-base);
      font-weight: 700;
    }
    &.active,
    &:hover {
      color: var(--primary-base);
      border-radius: 4px 4px 0px 0px;
      svg {
        fill: var(--primary-base);
      }
    }
  }
}
.space {
  margin-left: 8px;
}
.space-svg {
  margin-right: 12px;
}
// @media only screen and (max-width: 600px) {
//   ul {
//     overflow: auto;
//   }
//   li {
//     display: flex;
//     flex-direction: column;
//     padding: 16px 7px 12px;
//     background: #fff;
//     color: #66678f;
//     white-space: nowrap;
//     border-bottom: 2px solid rgba(171, 171, 196, 0.2);
//   }
//   li span {
//     font-size: 14px;
//   }
//   li svg {
//     fill: #ababc4;
//   }
//   .space {
//     margin-top: 5px;
//     margin-left: 0;
//   }
//   .active {
//     border-bottom: 2px solid #ed1b2e;
//     color: #0c0d25;
//     border-radius: 0;
//   }
// }
// @media only screen and (max-width: 375px) {
//   li {
//     padding: 16px 5px 12px;
//   }
//   li span {
//     font-size: 13px;
//   }
// }
// @media only screen and (max-width: 320px) {
//   li {
//     padding: 16px 6px 12px;
//   }
//   li span {
//     font-size: 10px;
//   }
// }
</style>

<template>
  <div class="main-nav">
    <ul>
      <li @click="activeNav('flight')" :class="{ active: value == 'flight' }">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
              fill-rule="evenodd"
              d="M3.64 14.26l2.86.95 4.02-4.02-8-4.59 1.16-1.16c.1-.1.26-.14.41-.1l9.3 2.98c1.58-1.58 3.15-3.2 4.77-4.75.31-.33.7-.58 1.16-.73.45-.16.87-.27 1.25-.34.55-.05.98.4.93.93-.07.38-.18.8-.34 1.25-.15.46-.4.85-.73 1.16l-4.75 4.78 2.97 9.29c.05.15 0 .29-.1.41l-1.17 1.16-4.57-8.02L8.8 17.5l.95 2.84L8.6 21.5l-2.48-3.62L2.5 15.4l1.14-1.14z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </div>
        <span class="space"> {{ $t("Flights") }} </span>
      </li>
      <li
        @click="activeNav('vacation')"
        :class="{ active: value == 'vacation' }"
        v-if="!location.includes('https://tripsupport.com')"
      >
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
              fill-rule="evenodd"
              d="M21.59 11.59h-2.36V8.66c0-.23-.2-.41-.43-.41h-5.82a.42.42 0 00-.43.41v2.93H10.2a.42.42 0 00-.43.41v8.34c0 .23.21.41.43.41h11.4c.21 0 .41-.2.41-.41V12c0-.23-.2-.41-.41-.41zm-7.36-1.68h3.32v1.68h-3.32V9.91zm3.79 9.06l-1.2-1.17 2.37-2.36 1.17 1.17-2.34 2.36zM10.89 4.91V3.66a.4.4 0 00-.41-.41H4.64a.4.4 0 00-.41.41v2.93H2.4A.4.4 0 002 7v13.34c0 .2.18.41.41.41h5.7V10.34c0-.23.18-.43.41-.43h2.37v-5zM9.23 6.59H5.89V4.91h3.34v1.68z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </div>
        <span class="space">{{ $t("Vacations") }} </span>
      </li>
      <li @click="activeNav('hotel')" :class="{ active: value == 'hotel' }">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
              fill-rule="evenodd"
              d="M21.61 21.41l-.47-1.1a.49.49 0 00-.16-.2.4.4 0 00-.23-.06h-.84V7.4a.4.4 0 00-.12-.28.38.38 0 00-.29-.13h-3.75V2.41a.4.4 0 00-.12-.28.38.38 0 00-.29-.13H4.5a.38.38 0 00-.3.13.4.4 0 00-.11.28v17.64h-.84a.4.4 0 00-.23.07.49.49 0 00-.16.18l-.47 1.11a.44.44 0 00-.03.2c0 .08.03.14.07.2a.38.38 0 00.33.2h18.48a.38.38 0 00.33-.2.36.36 0 00.07-.2c0-.06 0-.13-.03-.2zM9.09 17h-2.5v-2.5h2.5V17zm0-5h-2.5V9.5h2.5V12zm0-5h-2.5V4.5h2.5V7zm4.16 12.77h-2.5V14.5h2.5v5.27zm0-7.77h-2.5V9.5h2.5V12zm0-5h-2.5V4.5h2.5V7zm4.16 10h-2.5v-2.5h2.5V17zm0-5h-2.5V9.5h2.5V12z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </div>
        <span class="space"> {{ $t("Hotels") }} </span>
      </li>
      <!-- <li
        @click="activeNav('flight-hotel')"
        :class="{ active: value == 'flight-hotel' }"
      >
        <div>
          <svg
            width="20"
            height="20"
            viewBox="0 0 20 20"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M18.6756 3.55255C18.3777 3.84843 16.8906 5.48765 15.4582 6.91041C15.4582 18.901 15.8536 18.0009 13.841 20L12.2457 13.2887L10.6157 11.6696C6.29652 15.9591 6.9474 12.6375 6.9474 16.7439C6.95151 17.6407 6.57263 18.2306 6.0293 18.7702L4.51775 15.3766L1.10099 13.8751C2.22254 12.7622 2.83532 12.9633 5.48852 12.9633C6.39152 11.1115 7.50773 10.3177 8.38106 9.44995L6.7544 7.8343L0 6.25209C1.90588 4.35887 0.73755 4.70821 13.155 4.70821C14.595 3.27788 16.1419 1.63011 16.441 1.333C17.3016 0.478343 19.554 -0.262208 19.9082 0.0895676C20.2623 0.441343 19.5361 2.69777 18.6756 3.55255ZM17.1562 8.2713L16.2563 9.16318V11.7832C18.2017 9.83317 18.6967 9.80906 17.1562 8.2713ZM11.809 2.94655C10.2893 1.42967 10.4044 1.74345 8.23662 3.89877H10.8616L11.809 2.94655Z"
            />
          </svg>
          <svg
            width="22"
            height="16"
            viewBox="0 0 22 16"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M20.1666 0V5.88168H19.3309C18.9284 4.77015 17.9345 3.98386 16.7724 3.98386H14.256C13.0939 3.98386 12.1 4.77015 11.6975 5.88168H10.3025C9.9 4.77015 8.90615 3.98386 7.744 3.98386H5.22761C4.06546 3.98386 3.07161 4.77015 2.66915 5.88168H1.83288V0H20.1666ZM22 9.99978C22 8.489 20.9763 7.23886 19.6445 7.03058H2.35551C1.023 7.23886 0 8.489 0 9.99978V16H1.83288V12.9998H20.1666V16H22V9.99978Z"
            />
          </svg>
        </div>
        <span class="space"> {{ $t("Hotel_P_Flight") }} </span>
      </li>
      <li
        @click="activeNav('things-to-do')"
        :class="{ active: value == 'things-to-do' }"
      >
        <div>
          <svg
            width="20"
            height="20"
            viewBox="0 0 20 20"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              _ngcontent-edu-c5=""
              d="M18 20H0L1.31707 17.3243H8.78049L14.0488 14.1329L17.561 15.9565L18 20Z"
            ></path>
            <path
              _ngcontent-edu-c5=""
              d="M4.50257 3.14916L2.52153 9.33084L4.39024 12.3093L3.07317 16.4124H6.30469L5.09651 15.4491L7.2802 12.6556L6.65082 10.3459L8.52582 11.4881L9.06517 15.786L11.7245 14.4747L10.7855 13.7558L10.7035 10.729L7.56888 7.33805L8.01648 6.33973L10.189 7.79989L14.0488 6.83852L13.6098 5.92671L10.56 5.32909L7.26019 2.74386L7.42168 2.05215L8.1331 2.20767C8.1331 2.20767 8.61357 0.296064 7.0867 0.0460008C7.0867 0.0460008 5.42664 -0.623901 4.50257 3.14916Z"
            ></path>
            <path
              _ngcontent-edu-c5=""
              d="M13.6098 7.75032L11.8537 8.20622L12.2927 13.2211H13.1707L13.6098 7.75032Z"
            ></path>
            <path
              _ngcontent-edu-c5=""
              d="M3.57193 2.76301C3.57193 2.76301 1.72066 2.2378 1.1996 3.66605C0.678544 5.09461 0.0983232 6.47448 0.0983232 6.47448L1.98647 7.58707L3.57193 2.76301Z"
            ></path>
          </svg>
        </div>
        <span class="space"> {{ "Things To Do" }} </span>
      </li> -->
    </ul>
  </div>
</template>

<script>
export default {
  props: ["value"],
  data() {
    return {
      location: location.href,
    };
  },
  // watch: {
  //   location: {
  //     handler: function (val) {
  //       let targetLocation = [
  //         "flight",
  //         "vacation",
  //         "hotel",
  //         "flight-hotel",
  //         "things-to-do",
  //       ];
  //       targetLocation.forEach((element) => {
  //         if (val.includes(`${element}`)) {
  //           this.value = element;
  //           this.$emit("value", this.value);
  //         }
  //       });
  //     },
  //     immediate: true,
  //   },
  // },
  mounted() {},
  methods: {
    activeNav(menuItem) {
      // this.value = menuItem;
      // this.$emit("value", menuItem);
      this.$emit("input", menuItem);
      this.setServiceAnalytics();
    },
    setServiceAnalytics() {
      switch (this.value) {
        case "flight":
          this.$gtag.event("Services", {
            event_category: "Flight",
            event_label: "User Click Flight Flight",
          });
          break;
        case "vacation":
          this.$gtag.event("Services", {
            event_category: "Vacation",
            event_label: "User Click Flight Vacation",
          });
          break;
        case "hotel":
          this.$gtag.event("Services", {
            event_category: "Hotels",
            event_label: "User Click Flight Hotels",
          });
          break;
        case "flight-hotel":
          this.$gtag.event("Services", {
            event_category: "Flight-Hotel",
            event_label: "User Click Flight Flight-Hotel",
          });
          break;
      }
    },
  },
};
</script>
